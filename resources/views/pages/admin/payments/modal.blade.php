@php
    $_content = isset($_content) ? $_content : null
@endphp

<div class="modal fade" id="kt_modal_{{ $_content ? 'edit' : 'add' }}_customer" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <div class="modal-content">
            <form class="form" method="POST" enctype="multipart/form-data" action="{{ is_null($_content) ? route('payments.store') : route('payments.update', $_content?->id) }}"
                id="kt_modal_add_customer_form">
                @csrf
                @if (is_null($_content))
                    @method('POST')
                @else
                    @method('PUT')
                @endif
                <div class="modal-header" id="kt_modal_add_customer_header">
                    <h2 class="fw-bolder">
                        {{ is_null($_content) ? 'إضافة المدفوعات ' : 'تعديل المدفوعات'}}
                    </h2>
                    <button id="kt_modal_add_customer_close" data-dismiss="modal" aria-label="Close"
                        class="btn btn-icon btn-sm btn-active-icon-primary">
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                    </button>
                </div>
                <div class="modal-body py-10 px-lg-17">
                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true"
                        data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto"
                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">الداعم</label>
                            <select name="supporter_id" class="form-select">
                                @foreach ($supporters as $s)
                                    <option value="{{ $s->id }}" {{ old('supporter_id', $_content?->supporter_id) == $s->id ? 'selected' : '' }}>{{$s->info->user?->first_name}} {{$s->info->user?->last_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">طريقة الدفع</label>
                            <select name="paymentMethod_id" class="form-select">
                                @foreach ($methods as $s)
                                    <option value="{{ $s->id }}" {{ old('paymentMethod_id', $_content?->paymentMethod_id) == $s->id ? 'selected' : '' }}>{{ $s->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">المبلغ</label>
                            <input type="number" class="form-control" required name="amount" value="{{ old('amount', $_content?->amount) }}">
                        </div>

                        <div class="fv-row mb-7">
                            <label class="fs-6 fw-bold mb-2">المرفق</label>
                            <input type="file" class="form-control" name="attachment">
                        </div>

                        <div class="fv-row mb-7">
                            <label class="required fs-6 fw-bold mb-2">ملاحظة</label>
                            <input type="text" required class="form-control" name="note" value="{{ old('note', $_content?->note) }}">
                        </div>

                    </div>
                </div>
                <div class="modal-footer flex-center">
                    <button type="reset" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">الغاء</button>
                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                        <span class="indicator-label">{{ is_null($_content) ? 'أضافة' : 'تعديل'}}</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
