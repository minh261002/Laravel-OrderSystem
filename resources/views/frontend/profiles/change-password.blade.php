<div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
    <div class="fp_dashboard_body fp__change_password">
        <div class="fp__review_input">
            <h3>Đổi Mật Khẩu</h3>
            <div class="comment_input pt-0">
                <form action="{{ route('profile.update.password') }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-xl-6">
                            <div class="fp__comment_imput_single">
                                <label>Mật khẩu hiện tại</label>
                                <input type="password" name="current_password">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="fp__comment_imput_single">
                                <label>Mật Khẩu Mới</label>
                                <input type="password" name="password">
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="fp__comment_imput_single">
                                <label>Nhập Lại Mật Khẩu Mới</label>
                                <input type="password" name="password_confirmation">
                            </div>
                            <button type="submit" class="common_btn mt_20">Lưu Thay Đổi</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
