@extends('admin.master')

@section('content')






    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">

        <div class="group-data-[sidebar-size=lg]:ltr:md:ml-vertical-menu group-data-[sidebar-size=lg]:rtl:md:mr-vertical-menu group-data-[sidebar-size=md]:ltr:ml-vertical-menu-md group-data-[sidebar-size=md]:rtl:mr-vertical-menu-md group-data-[sidebar-size=sm]:ltr:ml-vertical-menu-sm group-data-[sidebar-size=sm]:rtl:mr-vertical-menu-sm pt-[calc(theme('spacing.header')_*_1)] pb-[calc(theme('spacing.header')_*_0.8)] px-4 group-data-[navbar=bordered]:pt-[calc(theme('spacing.header')_*_1.3)] group-data-[navbar=hidden]:pt-0 group-data-[layout=horizontal]:mx-auto group-data-[layout=horizontal]:max-w-screen-2xl group-data-[layout=horizontal]:px-0 group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:ltr:md:ml-auto group-data-[layout=horizontal]:group-data-[sidebar-size=lg]:rtl:md:mr-auto group-data-[layout=horizontal]:md:pt-[calc(theme('spacing.header')_*_1.6)] group-data-[layout=horizontal]:px-3 group-data-[layout=horizontal]:group-data-[navbar=hidden]:pt-[calc(theme('spacing.header')_*_0.9)]">
            <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">

                <div class="flex flex-col gap-2 py-4 md:flex-row md:items-center print:hidden">
                    <div class="grow">
                        <h5 class="text-16">Account Settings</h5>
                    </div>
                    <ul class="flex items-center gap-2 text-sm font-normal shrink-0">
                        <li class="relative before:content-['\ea54'] before:font-remix ltr:before:-right-1 rtl:before:-left-1  before:absolute before:text-[18px] before:-top-[3px] ltr:pr-4 rtl:pl-4 before:text-slate-400 dark:text-zink-200">
                            <a href="#!" class="text-slate-400 dark:text-zink-200">Pages</a>
                        </li>
                        <li class="text-slate-700 dark:text-zink-100">
                            Account Settings
                        </li>
                    </ul>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-12 2xl:grid-cols-12">
                            <div class="lg:col-span-2 2xl:col-span-1">
                                <div class="relative inline-block rounded-full shadow-md size-20 bg-slate-100 profile-user xl:size-28">
                                    <img src="{{ asset('images/avatar-1.png') }}" alt="" class="object-cover border-0 rounded-full img-thumbnail user-profile-image">
                                    <div class="absolute bottom-0 flex items-center justify-center rounded-full size-8 ltr:right-0 rtl:left-0 profile-photo-edit">
                                        <input id="profile-img-file-input" type="file" class="hidden profile-img-file-input">
                                        <label for="profile-img-file-input" class="flex items-center justify-center bg-white rounded-full shadow-lg cursor-pointer size-8 dark:bg-zink-600 profile-photo-edit">
                                            <i data-lucide="image-plus" class="size-4 text-slate-500 dark:text-zink-200 fill-slate-100 dark:fill-zink-500"></i>
                                        </label>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <div class="lg:col-span-10 2xl:col-span-9">
                                <h5 class="mb-1">{{ auth()->user()->name }}
                                    {{-- <i data-lucide="badge-check" class="inline-block size-4 text-sky-500 fill-sky-100 dark:fill-custom-500/20"></i> --}}
                                </h5>
                        </div><!--end grid-->
                    </div>
                    <div class="card-body !py-0">
                        <ul class="flex flex-wrap w-full text-sm font-medium text-center nav-tabs">
                            <li class="group active">
                                <a href="javascript:void(0);" data-tab-toggle data-target="personalTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Personal Info</a>
                            </li>
                            <li class="group">
                                <a href="javascript:void(0);" data-tab-toggle data-target="changePasswordTabs" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border-b border-transparent group-[.active]:text-custom-500 dark:group-[.active]:text-custom-500 group-[.active]:border-b-custom-500 hover:text-custom-500 dark:hover:text-custom-500 active:text-custom-500 dark:active:text-custom-500 -mb-[1px]">Change Password</a>
                            </li>
                        </ul>
                    </div>
                </div><!--end card-->

                <div class="tab-content">
                    <div class="block tab-pane" id="personalTabs">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-1 text-15">Personal Information</h6>
                                <p class="mb-4 text-slate-500 dark:text-zink-200">Update your photo and personal details here easily.</p>
                                <form action="{{ route('amdin_profile_update', $user->id) }}" method="POST" >
                                    @csrf
                                    @method('PUT')
                                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                        <div class="xl:col-span-6">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Name</label>
                                            <input name="name" type="text" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your value" value="{{ $user->name }}">
                                        </div><!--end col-->
                                        <div class="xl:col-span-6">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Phone Number</label>
                                            <input name="phone" type="text" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="+962 7..." value="{{ $user->phone }}">
                                        </div><!--end col-->
                                        <div class="xl:col-span-6">
                                            <label for="inputValue" class="inline-block mb-2 text-base font-medium">Email Address</label>
                                            <input name="email" type="email" id="inputValue" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Enter your email address" value="{{ $user->email }}">
                                        </div><!--end col-->
                                    </div><!--end grid-->
                                    <div class="flex justify-end mt-6 gap-x-4">
                                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">Updates</button>
                                        <button style="display: none" type="button" class="text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20">Cancel</button>
                                    </div>
                                </form><!--end form-->
                            </div>
                        </div>
                    </div>

                    <div class="hidden tab-pane" id="changePasswordTabs">
                        <div class="card">
                            <div class="card-body">
                                <h6 class="mb-4 text-15">Changes Password</h6>
                                <form action="{{ route('user.changePassword') }}" method="POST" onsubmit="validateForm(event)" id="changePasswordForm">
                                    @csrf
                                    <div class="grid grid-cols-1 gap-5 xl:grid-cols-12">
                                        <div class="xl:col-span-4">
                                            <label class="inline-block mb-2 text-base font-medium">Old Password*</label>
                                            <div class="relative">
                                                <input type="password" name="current_password" class="form-input" id="oldpasswordInput" placeholder="Enter current password">
                                                <button onclick="togglePasswordVisibility(this)" class="absolute top-2 ltr:right-4 rtl:left-4" type="button">
                                                    <i class="align-middle ri-eye-fill"></i>
                                                </button>
                                            </div>
                                            @error('current_password')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="xl:col-span-4">
                                            <label class="inline-block mb-2 text-base font-medium">New Password*</label>
                                            <div class="relative">
                                                <input type="password" name="new_password" class="form-input" id="newpasswordInput" placeholder="Enter new password">
                                                <button onclick="togglePasswordVisibility(this)" class="absolute top-2 ltr:right-4 rtl:left-4" type="button">
                                                    <i class="align-middle ri-eye-fill"></i>
                                                </button>
                                            </div>
                                            @error('new_password')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="xl:col-span-4">
                                            <label class="inline-block mb-2 text-base font-medium">Confirm Password*</label>
                                            <div class="relative">
                                                <input type="password" name="new_password_confirmation" class="form-input" id="confirmpasswordInput" placeholder="Confirm password">
                                                <button onclick="togglePasswordVisibility(this)" class="absolute top-2 ltr:right-4 rtl:left-4" type="button">
                                                    <i class="align-middle ri-eye-fill"></i>
                                                </button>
                                            </div>
                                            @error('new_password_confirmation')
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="flex justify-end xl:col-span-12">
                                            <button type="submit" class="btn bg-green-500 text-white">Change Password</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
        @endsection
        @section('script')

        <script src='{{ asset("libs/choices.js/public/assets/scripts/choices.min.js") }}'></script>
        <script src="{{ asset('libs/@popperjs/core/umd/popper.min.js') }}"></script>
        <script src="{{ asset('libs/tippy.js/tippy-bundle.umd.min.js') }}"></script>
        <script src="{{ asset('libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('libs/prismjs/prism.js') }}"></script>
        <script src="{{ asset('libs/lucide/umd/lucide.js') }}"></script>
        <script src="{{ asset('js/tailwick.bundle.js') }}"></script>

        <script src="{{ asset('js/pages/pages-account-setting.init.js') }}"></script>
        <script>
            function togglePasswordVisibility(button) {
                const input = button.previousElementSibling;
                if (input.type === 'password') {
                    input.type = 'text';
                    button.querySelector('i').classList.replace('ri-eye-fill', 'ri-eye-off-fill');
                } else {
                    input.type = 'password';
                    button.querySelector('i').classList.replace('ri-eye-off-fill', 'ri-eye-fill');
                }
            }

            function validateForm(event) {
                event.preventDefault(); // لمنع إرسال النموذج حتى يتم التحقق

                // الحصول على المدخلات
                const currentPassword = document.getElementById("oldpasswordInput");
                const newPassword = document.getElementById("newpasswordInput");
                const confirmPassword = document.getElementById("confirmpasswordInput");

                // تنظيف رسائل الخطأ السابقة
                document.querySelectorAll('.error-message').forEach(el => el.textContent = '');

                let isValid = true;

                // التحقق من كلمة المرور الحالية
                if (currentPassword.value.trim() === '') {
                    showError(currentPassword, 'يرجى إدخال كلمة المرور الحالية.');
                    isValid = false;
                }

                // التحقق من كلمة المرور الجديدة
                if (newPassword.value.trim() === '') {
                    showError(newPassword, 'يرجى إدخال كلمة المرور الجديدة.');
                    isValid = false;
                } else if (newPassword.value.length < 8) {
                    showError(newPassword, 'يجب أن تكون كلمة المرور الجديدة 8 أحرف على الأقل.');
                    isValid = false;
                }

                // التحقق من تأكيد كلمة المرور
                if (confirmPassword.value.trim() === '') {
                    showError(confirmPassword, 'يرجى تأكيد كلمة المرور.');
                    isValid = false;
                } else if (confirmPassword.value !== newPassword.value) {
                    showError(confirmPassword, 'تأكيد كلمة المرور لا يتطابق مع كلمة المرور الجديدة.');
                    isValid = false;
                }

                // إذا كانت التحقق ناجحًا، يتم إرسال النموذج
                if (isValid) {
                    document.getElementById('changePasswordForm').submit();
                }
            }

            // وظيفة عرض رسالة الخطأ
            function showError(input, message) {
                const errorSpan = document.createElement('span');
                errorSpan.className = 'text-red-500 text-sm error-message';
                errorSpan.textContent = message;
                input.parentElement.appendChild(errorSpan);
            }
        </script>

        <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>

        <script>
            $(document).ready(function () {
                $('.invoiceList').on('click', function () {
                    const invoiceId = $(this).data('invoice-id');
                    // alert(invoiceId);

                    // Make an AJAX request to fetch the invoice details
                    $.ajax({
                        url: `/user/profile/invoice/${invoiceId}`, // Laravel route for fetching invoice details
                        type: 'GET',
                        success: function (response) {

                            $('#invoiceDetails').html(response).removeClass('hidden');
                        },
                        error: function () {
                            alert('Failed to fetch invoice details.');
                        }
                    });
                });
            });
        </script>


        @endsection
