<x-base-layout>

{{--    {{ theme()->getView('pages/account/_navbar', array('class' => 'mb-5 mb-xl-10', 'info' => $info)) }}--}}


                <!--begin::Inbox App - Compose -->
                <div class="d-flex flex-column flex-lg-row">
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 w-lg-275px mb-10 mb-lg-0">
                        <!--begin::Sticky aside-->
                        <div class="card card-flush mb-0" data-kt-sticky="false" data-kt-sticky-name="inbox-aside-sticky" data-kt-sticky-offset="{default: false, xl: '0px'}" data-kt-sticky-width="{lg: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="150px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
                            <!--begin::Aside content-->
                            <div class="card-body">
                                <!--begin::Button-->
                                <a href="#" class="btn btn-primary text-uppercase w-100 mb-10">رسالة جديدة</a>
                                <!--end::Button-->
                                <!--begin::Menu-->
                                <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
                                    <!--begin::Menu item-->
                                    <div class="menu-item mb-3">
                                        <!--begin::Inbox-->
                                        <a href="{{ url('admin/suggestions') }}">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                                    <span class="svg-icon svg-icon-2 me-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black"></path>
                                                            <path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-title fw-bolder">صندوق المقترحات</span>
                                            </span>
                                        </a>
                                        <!--end::Inbox-->
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item mb-3">
                                        <!--begin::Sent-->
                                        <a href="{{ url('admin/suggestionsSent') }}">
                                            <span class="menu-link">
                                                <span class="menu-icon">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen016.svg-->
                                                    <span class="svg-icon svg-icon-2 me-3">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M15.43 8.56949L10.744 15.1395C10.6422 15.282 10.5804 15.4492 10.5651 15.6236C10.5498 15.7981 10.5815 15.9734 10.657 16.1315L13.194 21.4425C13.2737 21.6097 13.3991 21.751 13.5557 21.8499C13.7123 21.9488 13.8938 22.0014 14.079 22.0015H14.117C14.3087 21.9941 14.4941 21.9307 14.6502 21.8191C14.8062 21.7075 14.9261 21.5526 14.995 21.3735L21.933 3.33649C22.0011 3.15918 22.0164 2.96594 21.977 2.78013C21.9376 2.59432 21.8452 2.4239 21.711 2.28949L15.43 8.56949Z" fill="black"></path>
                                                            <path opacity="0.3" d="M20.664 2.06648L2.62602 9.00148C2.44768 9.07085 2.29348 9.19082 2.1824 9.34663C2.07131 9.50244 2.00818 9.68731 2.00074 9.87853C1.99331 10.0697 2.04189 10.259 2.14054 10.4229C2.23919 10.5869 2.38359 10.7185 2.55601 10.8015L7.86601 13.3365C8.02383 13.4126 8.19925 13.4448 8.37382 13.4297C8.54839 13.4145 8.71565 13.3526 8.85801 13.2505L15.43 8.56548L21.711 2.28448C21.5762 2.15096 21.4055 2.05932 21.2198 2.02064C21.034 1.98196 20.8409 1.99788 20.664 2.06648Z" fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </span>
                                                <span class="menu-title fw-bolder">المرسلة</span>
                                            </span>
                                        </a>
                                        <!--end::Sent-->
                                    </div>
                                    <!--end::Menu item-->

                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Aside content-->
                        </div>
                        <!--end::Sticky aside-->
                    </div>
                    <!--end::Sidebar-->
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">
                        <!--begin::Card-->
                        <div class="card">
                            <div class="card-header align-items-center">
                                <div class="card-title">
                                    <h2>اكتب رسالة</h2>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <!--begin::Form-->
                                <form id="send_message_form" class="form" method="POST" action="{{ route('admin.storeSuggestion') }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <!--begin::Body-->
                                    <div class="d-block">
                                        <!--begin::To-->
                                        <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
                                            <!--begin::Label-->
                                            <div class="text-dark fw-bolder w-75px">المرسل اليه:</div>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <select name="compose_to" data-control="select2" data-placeholder="{{ __('قم باختيار المرسل اليه') }}"
                                                class="form-select form-select-solid form-select-lg">
                                                <option value="">{{ __('اختر المرسل اليه ...') }}</option>
                                                @foreach(\App\Models\User::all() as $value)
                                                <option value="{{ $value->id}}">{{ $value->first_name.' '.$value->last_name}}</option>
                                                @endforeach
                                            </select>

                                              <!--end::Input-->
                                        </div>
                                        <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
                                            <div class="text-dark fw-bolder w-75px" style="color:red !important">مستعجل:</div>

                                            <label class="form-check form-check-inline form-check-solid me-5">
                                                <input class="form-check-input" name="urgent" type="checkbox" value="1" >
                                            </label>
                                        </div>
                                        <!--end::To-->
                                        <!--begin::Subject-->
                                        <div class="border-bottom">
                                            <input class="form-control form-control-transparent border-0 px-8 min-h-45px" name="title" placeholder="موضوع">
                                        </div>
                                        <!--end::Subject-->
                                        <!--begin::Message-->

                                        <div id="kt_inbox_form_editor" class="bg-transparent border-0 h-350px px-3 ql-container ql-snow">
                                            <textarea name="message" style="resize: none;" class="form-control ql-editor ql-blank" id="" cols="30" rows="15" placeholder="اكتب المحتوى هنا"></textarea>
{{--                                            <input name="message" type="hidden" id="message" />--}}
{{--                                            <div class="ql-editor ql-blank" style="color:#5e6278" id="msg" data-gramm="false" contenteditable="true">--}}
{{--                                                <p><br></p>--}}
{{--                                            </div>--}}
{{--                                            <div class="ql-clipboard" contenteditable="true" tabindex="-1"></div>--}}
{{--                                            <div class="ql-tooltip ql-hidden"><a class="ql-preview" rel="noopener noreferrer" target="_blank" href="about:blank"></a>--}}
{{--                                                <input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL"><a class="ql-action"></a><a class="ql-remove"></a>--}}
{{--                                            </div>--}}
                                        </div>
                                        <!--end::Message-->
                                    </div>
                                    <!--end::Body-->
                                    <!--begin::Footer-->
                                    <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
                                        <!--begin::Actions-->
                                        <div class="d-flex align-items-center me-3">
                                            <!--begin::Send-->
                                            <div class="btn-group me-4">
                                                <!--begin::Submit-->
                                                <button class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
                                                    أرسل
                                                </button>
                                            </div>
                                            <div id="yourBtn" style="top: 150px; width: 150px; max-height: 45px;  padding: 10px;color:white;  -webkit-border-radius: 5px;  -moz-border-radius: 5px;  border: 1px dashed #009ef7;  text-align: center;  background-color: #009ef7;cursor: pointer;" >
                                                <label class="card-text text-center" style=" font-family: calibri,serif; display: inline" for="files"><p>رفع ملف</p></label>
                                                <input accept=".jpg, .jpeg, .png" id="files" name="attachment" class="text-center upload_image" type="file" style="visibility: hidden;">
                                            </div>
{{--                                            <div style='height: 0px;width: 0px; overflow:hidden;'>--}}
{{--                                                <input id="upfile" type="file" value="upload" name="attachment" onchange="sub(this)" />--}}
{{--                                            </div>--}}

                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary" data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"></path>
                                                        <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"></path>
                                                        <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"></path>
                                                    </svg>
                                                </span>
                                            </span>
                                            <!--end::Dismiss reply-->
                                        </div>
                                        <!--end::Toolbar-->
                                    </div>
                                    <!--end::Footer-->
                                </form>
                                <!--end::Form-->
                            </div>
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Inbox App - Compose -->

@if (session('editAdminInfo')!=null)
    <input type="hidden" value="{{ session('editAdminInfo') }}" id="editAdminInfo" />
@endif

</x-base-layout>
