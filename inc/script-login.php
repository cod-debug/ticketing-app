
<script>
        checkLogin();

        $("#loginForm").on('submit', (e) => {
            e.preventDefault();
            let currentForm = e.target;
            let form_data = new FormData(currentForm);
            let formElement = $("#loginForm")[0];

            fetch('api/login.php', {
                method: "POST",
                body: form_data,
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response data as needed
                if(!data.success){
                    Swal.fire({
                        icon: "error",
                        iconColor: 'dodgerblue',
                        title: "Oops...",
                        text: data.message
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        iconColor: 'purple',
                        title: "Success",
                        text: data.message
                    });
                    localStorage.setItem('logged_in', true);
                    localStorage.setItem('user_id', 1);
                    formElement.reset();
                    openAdmin();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        $("#logoutBtn").on('click', () => {
            closeAdmin();
            localStorage.clear();    
        });
        
        function openAdmin(){
            $("#mainAdminPage").removeClass('d-none');
            $("#adminLoginForm").addClass('d-none');
        }

        function closeAdmin(){
            $("#mainAdminPage").addClass('d-none');
            $("#adminLoginForm").removeClass('d-none');
        }

        function checkLogin(){
            if(localStorage.getItem('logged_in') == 'true'){
                openAdmin();
            } else {
                closeAdmin();
            }
        }
    </script>