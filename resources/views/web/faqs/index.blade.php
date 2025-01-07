<x-website-layout>
    <div class="col-span-8 md:col-span-6 lg:col-span-6">
        <div class="h-full p-2">
            <h1 class="text-3xl font-bold text-center mb-4">{{ __('web.faq_page.title_page') }}</h1>
            <p class="text-lg mb-10" style="text-indent: 20px;">
                Hãy điền vào form bên dưới để gửi câu hỏi của bạn. Dưới đây là các câu trả lời cho những câu
                hỏi phổ biến mà bạn có thể đã có về chúng tôi. Nếu câu hỏi của bạn không được giải đáp ở
                đây, <a href="{{ route('web.contacts.index') }}" class="text-blue-500">
                    hãy liên hệ với chúng tôi!</a></p>

            <div class="my-10 border-t-4 border-dashed"></div>

            <style>
                .form-container {
                    width: 92%;
                    margin: 0 auto;
                }

                .no-outline {
                    border: unset !important;
                    outline: none !important;
                    box-shadow: none !important;
                }

                .modal-box {
                    max-height: calc(100vh - 0em);
                    width: 100%;
                    max-width: 42rem;
                }

                .flex-container {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    margin: 10px;
                }
            </style>
            <!-- The button to open modal -->
            <div class="flex-container">
                <p class="text-xl font-bold">Tất cả các câu hỏi</p>

                <label for="my_modal_6" class="btn">Gửi câu hỏi</label>
            </div>


            <!-- Put this part before </body> tag -->
            <input type="checkbox" id="my_modal_6" class="modal-toggle" />
            <div class="modal" role="dialog">
                <div class="modal-box p-2">
                    <div class="modal-action m-0 justify-center" style="display: block !important;">
                        <div class="grid grid-cols-1 gap-1">
                            <div style="text-align-last: right;">
                                <label for="my_modal_6" class="btn m-0 p-0 h-auto min-h-0">X
                                </label>
                            </div>
                            <h3 class="text-lg font-bold text-center">Hỏi đáp</h3>
                            <div>
                                <form id="faq-form" action="{{ route('web.faqs.store') }}" method="POST"
                                    class="needs-validation space-y-4 form-container" novalidate>
                                    @csrf
                                    <div class="grid grid-cols-2">
                                        <div>
                                            <label class="input input-bordered flex items-center gap-2 m-2">
                                                <i class="fad fa-user"></i>
                                                <input type="text" name="name" placeholder="Họ và tên"
                                                    value="{{ old('name') }}"
                                                    class="grow no-outline {{ $errors->has('name') ? 'input-error' : '' }}" />
                                                <!-- Thêm thẻ small để hiển thị lỗi -->
                                            </label>
                                            <small id="name-error" class="error-message"></small>
                                        </div>
                                        <div>
                                            <label class="input input-bordered flex items-center gap-2 m-2">
                                                <i class="fad fa-envelope"></i>
                                                <input type="text" name="email" placeholder="Email"
                                                    value="{{ old('email') }}"
                                                    class="grow no-outline {{ $errors->has('email') ? 'input-error' : '' }}" />
                                                <!-- Thêm thẻ small để hiển thị lỗi -->
                                            </label>
                                            <small id="email-error" class="error-message"></small>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-2">
                                        <div>
                                            <label class="input input-bordered flex items-center gap-2 m-2">

                                                <i class="fad fa-mobile-alt"></i>
                                                <input type="text" name="phone" placeholder="Số điện thoại"
                                                    value="{{ old('phone') }}"
                                                    class="grow no-outline {{ $errors->has('phone') ? 'input-error' : '' }}" />
                                                <!-- Thêm thẻ small để hiển thị lỗi -->
                                            </label>
                                            <small id="phone-error" class="error-message"></small>
                                        </div>
                                        <div>
                                            <label class="input input-bordered flex items-center gap-2 m-2">
                                                <i class="fad fa-map-marked"></i>
                                                <input type="text" name="address" placeholder="Địa chỉ"
                                                    value="{{ old('address') }}"
                                                    class="grow no-outline {{ $errors->has('address') ? 'input-error' : '' }}" />
                                                <!-- Thêm thẻ small để hiển thị lỗi -->
                                            </label>
                                            <small id="address-error" class="error-message"></small>
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-1">
                                        <div>
                                            <label class="input input-bordered flex items-center gap-2 m-2">
                                                <i class="fad fa-heading"></i>
                                                <input type="text" name="title" placeholder="Tiêu đề"
                                                    value="{{ old('title') }}"
                                                    class="grow no-outline {{ $errors->has('title') ? 'input-error' : '' }}" />
                                                <!-- Thêm thẻ small để hiển thị lỗi -->
                                            </label>
                                            <small id="title-error" class="error-message"></small>
                                        </div>
                                        <div>
                                            <label class="form-control w-full mt-2 h-[400px]">
                                                <div class="label">
                                                    <span class="label-text">@lang('admin.content')</span>
                                                </div>
                                                <textarea name="content_question" id="content_question"
                                                    class="form-input rounded-md shadow-sm mt-1 block w-full {{ $errors->has('content_question') ? 'input-error' : '' }}"
                                                    rows="1">{{ old('content_question') }}</textarea>
                                            </label>
                                            <small id="content_question-error" class="error-message"></small>
                                        </div>
                                    </div>
                                    <!-- Tinymce Config -->
                                    <x-admin.forms.tinymce-config column="content_question" model="Faq"
                                        id="content_question" />
                                    <div class="flex items-center justify-between !place-content-center">
                                        <button type="submit" class="btn bg-cyan-400 hover:bg-cyan-500 ...">
                                            <i class="fad fa-paper-plane"></i>
                                            @lang('web.send')
                                        </button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="mt-5">
                <form id="searchForm" method="GET" action="{{ route('web.faqs.search') }}">
                    <input type="text" id="searchInput" name="search" value="{{ request('search') }}"
                        class="rounded-lg" placeholder="Tìm kiếm...">
                </form>

                <ul id="resultsContainer" class="mt-5">
                    @include('web.faqs.faq_list', ['faqs' => $faqs])
                </ul>
            </section>
        </div>
    </div>

    <style>
        .toast {
            position: fixed;
            top: 20px;
            right: -320px;
            /* Bắt đầu ẩn bên ngoài màn hình */
            padding: 15px 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            color: white;
            max-width: 300px;
            z-index: 9999;
            transition: right 0.5s ease, opacity 0.5s ease;
            opacity: 0;
            height: fit-content;
        }

        .toast.show {
            right: 20px;
            opacity: 1;
        }

        .toast-success {
            background-color: #38a169;
        }

        .toast-error {
            background-color: #e53e3e;
        }

        .toast p {
            margin: 0;
        }

        .error-message {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: 0.05rem;
            position: absolute;
            opacity: 1;
            transition: opacity 0.3s ease;
            margin-left: 10px;
        }

        .error-message.hide {
            opacity: 0;
        }
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--Datatables -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const resultsContainer = document.getElementById('resultsContainer');

            let searchQuery = searchInput ? searchInput.value : '';

            if (searchInput) {
                searchInput.addEventListener('input', function() {
                    searchQuery = this.value;
                    fetchResults(searchQuery);
                });
            }

            function fetchResults(query, page = 1) {
                fetch(`/hoi-dap/search?search=${encodeURIComponent(query)}&page=${page}`, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
                        if (resultsContainer) {
                            resultsContainer.innerHTML = html;
                            initializeToggleButtons(); // Khởi tạo lại các nút hiển thị/ẩn câu trả lời
                        } else {
                            console.error('Results container not found');
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching search results:', error);
                    });
            }

            function initializeToggleButtons() {
                document.querySelectorAll('.toggle-answer').forEach(button => {
                    button.addEventListener('click', function() {
                        const container = button.closest('.answer-container');
                        const content = container.querySelector('.answer-content');
                        const iconShow = container.querySelector('.icon-show');
                        const iconHide = container.querySelector('.icon-hide');
                        const textShow = container.querySelector('.text-show');
                        const textHide = container.querySelector('.text-hide');

                        if (content.style.display === 'none' || content.style.display === '') {
                            content.style.display = 'flex';
                            iconShow.style.display = 'none';
                            iconHide.style.display = 'flex';
                            textShow.style.display = 'none';
                            textHide.style.display = 'inline';
                        } else {
                            content.style.display = 'none';
                            iconShow.style.display = 'flex';
                            iconHide.style.display = 'none';
                            textShow.style.display = 'inline';
                            textHide.style.display = 'none';
                        }
                    });
                });
            }

            // Initialize toggle buttons when the page loads
            initializeToggleButtons();

            // Handle pagination clicks
            document.addEventListener('click', function(event) {
                if (event.target.matches('.pagination a')) {
                    event.preventDefault();
                    const url = new URL(event.target.href);
                    const page = url.searchParams.get('page');
                    fetchResults(searchQuery, page);
                }
            });
        });
    </script>

    {{-- end Datatables  --}}
    <script>
        function showToast(message, type = 'success') {
            const toastId = `toast-${type}`;
            let toast = $(`#${toastId}`);

            if (toast.length === 0) {
                $('body').append(`
                  <div id="${toastId}" class="toast toast-${type}">
                      <p></p>
                  </div>
              `);
                toast = $(`#${toastId}`);
            }

            toast.find('p').text(message);

            setTimeout(() => {
                toast.addClass('show');
            }, 100);

            setTimeout(() => {
                toast.removeClass('show');
            }, 3000);
        }

        function showFieldError(field, message) {
            const errorElement = $(`#${field}-error`);
            errorElement.text(message).removeClass('hide');

            setTimeout(() => {
                errorElement.addClass('hide');
            }, 3000);
        }

        $(document).ready(function() {
            $('#faq-form').on('submit', function(event) {
                event.preventDefault();

                $.ajax({
                    url: $(this).attr('action'),
                    method: $(this).attr('method'),
                    data: $(this).serialize(),
                    success: function(response) {
                        showToast(response.success || 'Gửi thành công', 'success');
                    },
                    error: function(response) {
                        console.log('Lỗi khi gửi form', response);

                        if (response.status === 422) {
                            var errors = response.responseJSON.errors;

                            $.each(errors, function(field, messages) {
                                showFieldError(field, messages[0]);
                            });

                            showToast(response.responseJSON.message || 'Đã xảy ra lỗi',
                                'error');
                        } else {
                            showToast('Đã xảy ra lỗi', 'error');
                        }
                    }
                });
            });
        });
    </script>

    @include('web.right-content')
</x-website-layout>
