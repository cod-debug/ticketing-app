
<div id="mainAdminPage" class="d-none">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow">
        <?php require('components/navbar.php') ?>
    </nav>
    <main>
        <div class="container bg-white p-4 my-4" style="min-height: 80vh;">
            <div class="table-responsive">
                <div class="d-flex justify-content-between align-items-center">
                    <h4>Ticket Purchases</h4>
                    <div>
                        <strong>Total: </strong><p1 class="text-lg text-success total-amount-output"></p1>
                    </div>
                </div>
                <hr />
                <div class="mt-5"></div>
                <table class="tablew-100" id="buyersTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Purchased By</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th>Area</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="buyersTableBody">
                        
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    <?php require('components/footer.php') ?>
</div>
<script>
    

    fetch('api/get-tickets.php', {
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
            $tr = "";
            for(const row in data){
                let item = data[row];
                let ref_num = String(item.id).padStart(4, '0');
                console.log(`${JSON.stringify(item)}`);
                $tr += `
                    <tr>
                        <td>${ref_num}</td>
                        <td>${item.full_name}</td>
                        <td>${item.contact}</td>
                        <td>${item.email}</td>
                        <td>${item.area}</td>
                        <td class="text-right">${item.total_amount}</td>
                        <td class="text-right"><button class="btn btn-outline-info btn-sm preview-ticket" data-ticket='${JSON.stringify(item)}'>Preview</button></td>
                    </tr>
                `;
                $("#buyersTable tbody").html($tr);

                total+=parseInt(item.total_amount);
            }

            $(".preview-ticket").on('click', function () {
                let data = $(this).data('ticket');
                console.log(data);
                previewTicket(data);
            });
        }
        $("#buyersTable").DataTable();
        $('.total-amount-output').html(`₱ ${total.toLocaleString()}`);
    })
    .catch(error => {
        console.error('Error:', error);
    });
    function previewTicket(item){
        let ref_num = String(item.id).padStart(4, '0');

        Swal.fire({
            title: "#"+ref_num,
            html: 
            `
                <div><h4>${item.full_name}</h4></div>
                <div>${item.address}</div>
                <div><img src="./uploads/proof_of_payment/${item.proof_of_payment}" class="w-100" /></div>
            `
        });
    }
    // $("#buyersTable").DataTable();
</script>