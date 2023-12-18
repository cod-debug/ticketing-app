
<div id="adminLoginForm">
    <div class="d-flex justify-content-center align-items-center height-full">
        <div class="text-center p-5 welcome-message" style="width: 550px; max-width: 95vw;">
            <h1 class="title">Breakthrough</h1>
            <h5 class="subtitle text-white">CFC - YFC Praise Concert 2024</h5>
            <div>
                <form id="loginForm" method="POST">
                    <div class="form__group field">
                        <input type="input" class="form__field" placeholder="Username" name="username" id='username' required />
                        <label for="username" class="form__label">Username</label>
                    </div>
                    <div class="form__group field">
                        <input type="password" class="form__field" placeholder="Password" name="password" id='password' required />
                        <label for="password" class="form__label">Password</label>
                    </div>
                    <div class="form-group mt-4 row">
                        <div class="col-md-6">
                            <button type="submit" name="save-ticket" class="btn btn-outline-info w-100" id="submitBtn">Submit</button>
                        </div>
                        <div class="col-md-6">
                            <a type="button" class="btn btn-outline-secondary w-100" href="/">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>