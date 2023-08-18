@extends('client.masterpage.masterpage_index')
@section('content')
    <div class="col-lg-4 col-md-6 col-12">
        <div class="card chat-widget">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <div class="avatar me-2">
                        <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-20.jpg" alt="Avatar" width="34"
                            height="34" />
                        <span class="avatar-status-online"></span>
                    </div>
                    <h5 class="mb-0">Carrie Hawkins</h5>
                </div>
                <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i>
            </div>
            <!-- User Chat messages -->
            <section class="chat-app-window">
                <div class="user-chats">
                    <div class="chats">
                        <div class="chat">
                            <div class="chat-avatar">
                                <span class="avatar box-shadow-1 cursor-pointer">
                                    <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                        height="36" width="36" />
                                </span>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content">
                                    <p>How can we help? We're here for you! 😄</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-avatar">
                                <span class="avatar box-shadow-1 cursor-pointer">
                                    <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar"
                                        height="36" width="36" />
                                </span>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content">
                                    <p>Hey John, I am looking for the best admin template.</p>
                                    <p>Could you please help me to find it out? 🤔</p>
                                </div>
                                <div class="chat-content">
                                    <p>It should be Bootstrap 4 compatible.</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-avatar">
                                <span class="avatar box-shadow-1 cursor-pointer">
                                    <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                        height="36" width="36" />
                                </span>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content">
                                    <p>Absolutely!</p>
                                </div>
                                <div class="chat-content">
                                    <p>Vuexy admin is the responsive bootstrap 4 admin template.</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-avatar">
                                <span class="avatar box-shadow-1 cursor-pointer">
                                    <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar"
                                        height="36" width="36" />
                                </span>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content">
                                    <p>Looks clean and fresh UI. 😃</p>
                                </div>
                                <div class="chat-content">
                                    <p>It's perfect for my next project.</p>
                                </div>
                                <div class="chat-content">
                                    <p>How can I purchase it?</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-avatar">
                                <span class="avatar box-shadow-1 cursor-pointer">
                                    <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                        height="36" width="36" />
                                </span>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content">
                                    <p>Thanks, from ThemeForest.</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat chat-left">
                            <div class="chat-avatar">
                                <span class="avatar box-shadow-1 cursor-pointer">
                                    <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-20.jpg" alt="avatar"
                                        height="36" width="36" />
                                </span>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content">
                                    <p>I will purchase it for sure. 👍</p>
                                </div>
                                <div class="chat-content">
                                    <p>Thanks.</p>
                                </div>
                            </div>
                        </div>
                        <div class="chat">
                            <div class="chat-avatar">
                                <span class="avatar box-shadow-1 cursor-pointer">
                                    <img src="/vuexy_assets/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                                        height="36" width="36" />
                                </span>
                            </div>
                            <div class="chat-body">
                                <div class="chat-content">
                                    <p>Great, Feel free to get in touch on</p>
                                </div>
                                <div class="chat-content">
                                    <p>https://pixinvent.ticksy.com/</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Submit Chat form -->
                <form class="chat-app-form" action="javascript:void(0);" onsubmit="enterChat();">
                    <div class="input-group input-group-merge me-50 w-75 form-send-message">
                        <span class="input-group-text">
                            <label for="attach-doc" class="attachment-icon mb-0">
                                <i data-feather="image" class="cursor-pointer text-secondary"></i>
                                <input type="file" id="attach-doc" hidden /> </label></span>
                        <input type="text" class="form-control message" placeholder="Type your message" />
                    </div>
                    <button type="button" class="btn btn-primary send" onclick="enterChat();">
                        <i data-feather="send" class="d-lg-none"></i>
                        <span class="d-none text-nowrap d-lg-block">Send</span>
                    </button>
                </form>
                <!--/ Submit Chat form -->
            </section>
            <!-- User Chat messages -->
        </div>
    </div>
@endsection
