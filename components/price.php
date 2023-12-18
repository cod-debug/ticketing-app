
<div id="mainAdminPage" class="d-none">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow">
        <?php require('components/navbar.php') ?>
    </nav>
    <main>
        <div class="container bg-white p-4 my-4" style="min-height: 80vh;">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Ticket Price</h4>
            </div>
            <hr />
            <div class="row" id="ticketPrice">
                <div class="card w-50 mx-auto">
                    <div class="card-body p-3">
                        <form method="POST" id="ticketPriceForm" class="p-4 w-100">
                            <div class="form-group">
                                <label>Price:</label>
                                <input type="number" class="form-control" style="font-size: 18pt; " required name="new_price" id="new_price">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary">Save Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require('components/footer.php') ?>
</div>
<script>
    var existing_val = 0;

    fetch('api/get-price.php', {
        method: "GET",
    })
    .then(response => response.json())
    .then(data => {
        let total = 0;
        // Handle the response data as needed
        if(data.error){
            Swal.fire({
                icon: "error",
                iconColor: 'dodgerblue',
                title: "Oops...",
                text: data.message
            });
        } else {
            $("#new_price").val(data.result);
            existing_val = data.result;
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
    
    $("#ticketPriceForm").on('submit', (e) => {
        e.preventDefault();
        let currentForm = e.target;
        let form_data = new FormData(currentForm);
        let formElement = $("#ticketPriceForm")[0];

        if($("#new_price").val() == existing_val) {
            Swal.fire({
                icon: "warning",
                iconColor: 'darkslategreen',
                title: "Oops...",
                text: "Value is the same."
            });
            
            return false;
        }
        
        fetch('api/update-price.php', {
                method: "POST",
                body: form_data,
            })
            .then(response => response.json())
            .then(data => {
                // Handle the response data as needed
                if(!data.success){
                    Swal.fire({
                        icon: "error",
                        iconColor: 'darkslategreen',
                        title: "Oops...",
                        text: data.result
                    });
                } else {
                    Swal.fire({
                        icon: "success",
                        iconColor: 'darkslategreen',
                        title: "Success",
                        text: data.result
                    });
                    existing_val = $("#new_price").val();
                }
            })
            .catch(error => {
                Swal.fire({
                    icon: "error",
                    iconColor: 'darkslategreen',
                    title: "Oops...",
                    text: error
                });
                console.error('Error:', error);
            });
    })
</script>