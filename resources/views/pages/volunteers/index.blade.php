<x-base-layout>
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <x-alert>
        </x-alert>
        <!--begin::Post-->
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container-xxl">
                <!--begin::Card-->
                <h4>عرض المتطوعين + اضافة متطوع</h4>
                <div class="card">
                    <!--begin::Card header-->
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">

                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                {{-- <span class="svg-icon svg-icon-1 position-absolute ms-6">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
														<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
													</svg>
												</span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-customer-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="بحث ... " />
                             --}}
                            </div>
                            <!--end::Search-->
                        </div>


                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Toolbar-->
                            <div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
                                <!--begin::Export-->
                                <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_customers_export_modal">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr078.svg-->
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="12.75" y="4.25" width="12" height="2" rx="1"
                                                transform="rotate(90 12.75 4.25)" fill="black" />
                                            <path
                                                d="M12.0573 6.11875L13.5203 7.87435C13.9121 8.34457 14.6232 8.37683 15.056 7.94401C15.4457 7.5543 15.4641 6.92836 15.0979 6.51643L12.4974 3.59084C12.0996 3.14332 11.4004 3.14332 11.0026 3.59084L8.40206 6.51643C8.0359 6.92836 8.0543 7.5543 8.44401 7.94401C8.87683 8.37683 9.58785 8.34458 9.9797 7.87435L11.4427 6.11875C11.6026 5.92684 11.8974 5.92684 12.0573 6.11875Z"
                                                fill="black" />
                                            <path
                                                d="M18.75 8.25H17.75C17.1977 8.25 16.75 8.69772 16.75 9.25C16.75 9.80228 17.1977 10.25 17.75 10.25C18.3023 10.25 18.75 10.6977 18.75 11.25V18.25C18.75 18.8023 18.3023 19.25 17.75 19.25H5.75C5.19772 19.25 4.75 18.8023 4.75 18.25V11.25C4.75 10.6977 5.19771 10.25 5.75 10.25C6.30229 10.25 6.75 9.80228 6.75 9.25C6.75 8.69772 6.30229 8.25 5.75 8.25H4.75C3.64543 8.25 2.75 9.14543 2.75 10.25V19.25C2.75 20.3546 3.64543 21.25 4.75 21.25H18.75C19.8546 21.25 20.75 20.3546 20.75 19.25V10.25C20.75 9.14543 19.8546 8.25 18.75 8.25Z"
                                                fill="#C4C4C4" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->تصدير
                                </button>
                                <!--end::Export-->
                                <!--begin::Add customer-->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_add_customer">إضافة متطوع جديد
                            </div>
                            <!--end::Toolbar-->
                            <!--begin::Group actions-->
                            <div class="d-flex justify-content-end align-items-center d-none"
                                data-kt-customer-table-toolbar="selected">
                                <div class="fw-bolder me-5">
                                    <span class="me-2" data-kt-customer-table-select="selected_count"></span>تم التحديد
                                </div>
                                <button type="button" class="btn btn-danger"
                                    data-kt-customer-table-select="delete_selected">حذف التحديد</button>
                            </div>
                            <!--end::Group actions-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <!--begin::Table-->
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
                            <!--begin::Table head-->
                            <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        {{-- <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                    </div> --}}
                                    </th>
                                    <th class="min-w-125px">الاسم</th>
                                    <th class="min-w-125px">البريد الالكتروني</th>
                                    <th class="min-w-125px">نوع التطوع</th>
                                    <th class="min-w-125px">ملاحظة</th>
                                    <th class="min-w-125px">السجلات</th>
                                    <th class="min-w-70px">خيارات</th>
                                </tr>
                                <!--end::Table row-->
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold text-gray-600">
                                @foreach($volunteers as $value)
                                <tr>
                                    <td class="w-10px pe-2">
                                        {{-- <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_customers_table .form-check-input" value="1" />
                                    </div> --}}
                                    </td>
                                    <td class="min-w-125px">{{ $value->info->user->first_name }}
                                        {{ $value->info->user->last_name }}</td>
                                    <td class="min-w-125px">{{ $value->info->user->email }}</td>
                                    <td class="min-w-125px">{{ $value->volunteer_type }}</td>
                                    <td class="min-w-125px">{{ $value->note }}</td>
                                    <td class="min-w-125px">
                                        @foreach($value->logs as $log)
                                        <span class="badge badge-light-success fs-8 fw-bolder">{{ $log->name }} </span>
                                        :
                                        <span class="badge badge-light-danger fs-8 fw-bolder">{{ $log->hours }} ساعة
                                        </span>
                                        <span class="badge badge-light-warning fs-8 fw-bolder">{{ $log->note }} </span>
                                        <br />
                                        @endforeach
                                    </td>
                                    <td class="min-w-70px">
                                        <form method="post" class="form"
                                            action="{{  route('volunteers.destroy', $value->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" value="{{ $value->id }}" name="id">
                                            <button class="btn btn-danger" type="submit" value="مسح">مسح</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <!--end::Table body-->
                        </table>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->




                <!--begin::Modals اضافة سجل جديد-->
                <!--begin::Modal - Customers - Add-->
                <div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Form-->
                            <form class="form" action="{{route('volunteers.store')}}" id="kt_modal_add_customer_form"
                                method="post" data-kt-redirect="../../demo8/dist/apps/customers/list.html">
                                @csrf
                                <!--begin::Modal header-->
                                <div class="modal-header" id="kt_modal_add_customer_header">
                                    <!--begin::Modal title-->
                                    <h2 class="fw-bolder">إضافة متطوع جديد</h2>
                                    <!--end::Modal title-->
                                    <!--begin::Close-->
                                    <div id="kt_modal_add_customer_close"
                                        class="btn btn-icon btn-sm btn-active-icon-primary">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                    transform="rotate(-45 6 17.3137)" fill="black" />
                                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                    transform="rotate(45 7.41422 6)" fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </div>
                                    <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div class="modal-body py-10 px-lg-17">
                                    <!--begin::Scroll-->
                                    <div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll"
                                        data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                        data-kt-scroll-max-height="auto"
                                        data-kt-scroll-dependencies="#kt_modal_add_customer_header"
                                        data-kt-scroll-wrappers="#kt_modal_add_customer_scroll"
                                        data-kt-scroll-offset="300px">

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">

                                            <!--begin::Input-->
                                            <select name="user_info_id" aria-label="{{ __('اختر العضو') }}"
                                                data-control="select2" data-placeholder="{{ __('قم باختيار العضو') }}"
                                                class="form-select form-select-solid form-select-lg">
                                                <option value="">{{ __('اختر اسم العضو ...') }}</option>
                                                @foreach(\App\Models\UserInfo::all() as $value)
                                                @if($value->volunteer==null)
                                                <option value="{{ $value->id}}">{{ $value->user->name}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                            <!--end::Input-->

                                            <!--begin::Hint-->
                                            <div class="form-text">
                                                {{ __('الانضمام كعضو متطوع يتطلب الأول وجود سجل كداعم للشخص ويتم عرض قائمة الداعمين للانضمام') }}
                                            </div>
                                            <!--end::Hint-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold mb-2">نوع التطوع</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="volunteer_type" value="تطوع عام مفتوح" />

                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row mb-15">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold mb-2">ملاحظة</label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="note" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->


                                    </div>
                                    <!--end::Scroll-->
                                </div>
                                <!--end::Modal body-->
                                <!--begin::Modal footer-->
                                <div class="modal-footer flex-center">
                                    <!--begin::Button-->
                                    <button type="reset" id="kt_modal_add_customer_cancel"
                                        class="btn btn-light me-3">إلغاء</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_modal_add_customer_submit" class="btn btn-primary">
                                        <span class="indicator-label">حفظ</span>
                                        <span class="indicator-progress">الرجاء الانتظار ...
                                            <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </button>
                                    <!--end::Button-->
                                </div>
                                <!--end::Modal footer-->
                            </form>
                            <!--end::Form-->
                        </div>
                    </div>
                </div>
                <!--end::Modal - Customers - Add-->


                <!--begin::Modal - Adjust Balance-->
                <div class="modal fade" id="kt_customers_export_modal" tabindex="-1" aria-hidden="true">
                    <!--begin::Modal dialog-->
                    <div class="modal-dialog modal-dialog-centered mw-650px">
                        <!--begin::Modal content-->
                        <div class="modal-content">
                            <!--begin::Modal header-->
                            <div class="modal-header">
                                <!--begin::Modal title-->
                                <h2 class="fw-bolder">Export Customers</h2>
                                <!--end::Modal title-->
                                <!--begin::Close-->
                                <div id="kt_customers_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                                transform="rotate(-45 6 17.3137)" fill="black" />
                                            <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                                transform="rotate(45 7.41422 6)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Close-->
                            </div>
                            <!--end::Modal header-->
                            <!--begin::Modal body-->
                            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                <!--begin::Form-->
                                <form id="kt_customers_export_form" class="form" action="#">
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-bold form-label mb-5">Select Export Format:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select data-control="select2" data-placeholder="Select a format"
                                            data-hide-search="true" name="format" class="form-select form-select-solid">
                                            <option value="excell">Excel</option>
                                            <option value="pdf">PDF</option>
                                            <option value="cvs">CVS</option>
                                            <option value="zip">ZIP</option>
                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-5 fw-bold form-label mb-5">Select Date Range:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input class="form-control form-control-solid" placeholder="Pick a date"
                                            name="date" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" id="kt_customers_export_cancel"
                                            class="btn btn-light me-3">Discard</button>
                                        <button type="submit" id="kt_customers_export_submit" class="btn btn-primary">
                                            <span class="indicator-label">Submit</span>
                                            <span class="indicator-progress">Please wait...
                                                <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Modal body-->
                        </div>
                        <!--end::Modal content-->
                    </div>
                    <!--end::Modal dialog-->
                </div>
                <!--end::Modal - New Card-->


                <!--end::Modals-->
            </div>
            <!--end::Container-->

        </div>
        <!--end::Post-->
    </div>
    <!--end::Content-->
    @section('scripts')
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="{{asset('alkhirat/plugins/custom/datatables/datatables.bundle.js')}}"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script type="text/javascript">
    $(function() {

        var table = $('#kt_customers_table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('volunteer.list') }}",
            columns: [{
                    data: 'DT_RowIndex',
                    name: 'DT_RowIndex'
                },
                {
                    data: 'name',
                    name: 'name'
                },
                {
                    data: 'email',
                    name: 'email'
                },
                {
                    data: 'user_info_id',
                    name: 'user_info_id'
                },
                {
                    data: 'volunteer_type',
                    name: 'volunteer_type'
                },
                {
                    data: 'note',
                    name: 'note'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
    </script>
    @endsection
</x-base-layout>
