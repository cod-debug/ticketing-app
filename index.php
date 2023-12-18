<!DOCTYPE HTML>
<html>
    <?php require('./inc/header.php') ?>
    <body>
        <img src="./assets/images/logo.gif" class="moving-logo" />
        <?php include('./inc/conn.php') ?>
        <!-- <button id="buyTIcket" class="buy-ticket-btn btn glow-on-hover btn-lg pointer text-uppercase animated-button1">
            <span></span>
            <span></span>
            <span></span>
            Purchase Ticket
        </button> -->
        
        <button class="box__link button-animation" id="boughtTicket" onclick="openReceiptForm()">
            Purchased Ticket
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>

        <button class="box__link button-animation" id="buyTIcket">
            Buy Ticket
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="d-none w-100" id="buyTicketForm">
            <p id="result_number"></p>
            <div class="d-flex justify-content-center align-items-center height-full ticket-form text-white text-uppercase">
                <div class="text-center w-50 p-5 welcome-message">
                    <span></span>
                    <span></span>
                    <span></span>
                    <img src="./assets/images/logo.png" style="width: 100px;" />
                    <form method="POST" class="text-left" id="mainForm">
                        <div class="form__group field">
                            <input type="input" class="form__field" placeholder="Full Name" name="full_name" id='full_name' required />
                            <label for="full_name" class="form__label">Full Name</label>
                        </div>
                        <div class="form__group field">
                            <input type="number" class="form__field" min="1" placeholder="number_of_ticket" name="number_of_ticket" id='number_of_ticket' required />
                            <label for="number_of_ticket" class="form__label">Number of Tickets</label>
                        </div>
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="Contact Number" name="contact_number" id='contact_number' required />
                            <label for="contact_number" class="form__label">Contact Number</label>
                        </div>
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="Email" name="email" id='email' required />
                            <label for="email" class="form__label">Email</label>
                        </div>
                        <div class="form__group field">
                            <input type="text" class="form__field" placeholder="Address" name="address" id='address' required />
                            <label for="address" class="form__label">Address</label>
                        </div>
                        <div class="form__group field">
                            <select type="text" class="form__field" placeholder="mode_of_payment" name="mode_of_payment" id='mode_of_payment' required>
                                <option disabled selected value="">- Select - </option>
                                <option value="gcash">GCash</option>
                                <option value="maya">Maya</option>
                            </select>
                            <label for="area" class="form__label">Mode of Payment</label>
                        </div>
                        <div class="form__group field">
                            <select type="text" class="form__field" placeholder="Area" name="area" id='area' required>
                                <option disabled selected value="">- Select - </option>
                                <option>North A</option>
                                <option>North B</option>
                                <option>Central</option>
                                <option>South A</option>
                                <option>South B</option>
                                <option>Campus-based</option>
                                <option>HSB</option>
                                <option>YCOM</option>
                                <option>KFC</option>
                                <option>Non-YFC</option>
                            </select>
                            <label for="area" class="form__label">Area</label>
                        </div>
                        <div class="form__group field">
                            <input type="number" class="form__field" placeholder="total_amount" name="total_amount" id='total_amount' required />
                            <label for="total_amount" class="form__label">Total Amount</label>
                        </div>
                        <div class="form__group field">
                            <input type="file" class="form__field" placeholder="proof_of_payment" name="proof_of_payment" id='proof_of_payment' required />
                            <label for="proof_of_payment" class="form__label">Proof of Payment</label>
                        </div>
                        <div class="form-group mt-4">
                            <button type="submit" name="save-ticket" class="btn btn-outline-info" id="submitBtn">Submit</button>
                            <button type="button" class="btn btn-outline-secondary" id="cancelBtnReceiptForm">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="d-none w-100" id="receiptForm">
            <div class="d-flex justify-content-center align-items-center height-full ticket-form text-white text-uppercase">
                <div class="text-center w-50 p-5 welcome-message">
                    <span></span>
                    <span></span>
                    <span></span>
                    <div>    
                        <form method="POST" class="text-left" id="receiptFormForm">
                            <div class="form__group field">
                                <input type="email" class="form__field" required placeholder="email_address" name="email_address" id='email_address' required />
                                <label for="email_address" class="form__label">Email Address</label>
                                
                            </div>
                            <div class="form-group mt-4">
                                <button type="submit" name="search-ticket" class="btn btn-outline-info" id="submitSearchBtn">Find</button>
                                <button type="button" class="btn btn-outline-secondary" id="cancelBtn">Cancel</button>
                            </div>
                            <div style="border:1px dashed white; margin-bottom: 20px;"></div>
                            
                            <div id="personal_details"></div>
                            <div id="ticket_list" class="d-none">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Ticket Purchases</h4>
                                    <div>
                                        <strong>Total: </strong><p1 class="text-md text-warning total-amount-output"></p1>
                                    </div>
                                </div>
                                <p class="alert alert-warning" style="font-size: 8pt;">Please contact our secretariat heads for your schedule on when to claim the tickets. 
                                    <br>
                                    <strong>Eloisa Abello: 09924743708 </strong>
                                    <br>
                                    <strong>Allen Rey Pis-an: 09068582858 </strong>
                                </p>
                                <table class="tablew-100 d-none" id="buyersTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th class="text-right">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody id="buyersTableBody">
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div id="total_details"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    <?php require('./inc/scripts.php') ?>
    <script>
        $("#buyTIcket").on('click', () => {
            openForm();
        });

        $("#cancelBtn").on('click', () => {
            closeForm();
            closeReceiptForm();
        });

        $("#cancelBtnReceiptForm").on('click', () => {
            closeForm();
            closeReceiptForm();
        });

        function openForm(){
            $('#buyTicketForm').removeClass('d-none');
            $('#buyTIcket').removeClass('d-flex');
            $('#buyTIcket').addClass('d-none');
        }

        function closeForm(){
            $('#buyTicketForm').addClass('d-none');
            $('#buyTIcket').addClass('d-flex');
            $('#buyTIcket').removeClass('d-none');
        }

        function openReceiptForm(){
            closeForm();
            $("#receiptForm").removeClass('d-none');
            $("#boughtTicket").addClass('d-none');
            
        }

        function closeReceiptForm(){
            closeForm();
            $("#ticket_list").addClass("d-none");
            $("#receiptForm").addClass('d-none');
            $("#boughtTicket").removeClass('d-none');
        }

        $("#mainForm").on('submit', (e) => {
            e.preventDefault();
            let currentForm = e.target;
            let form_data = new FormData(currentForm);
            let formElement = $("#mainForm")[0];

            fetch('api/save-ticket.php', {
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
                    formElement.reset();
                    closeForm();
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
            
        });

        $("#receiptFormForm").on('submit', (e) => {
            $("#ticket_list").removeClass('d-none');
            e.preventDefault();
            let currentForm = e.target;
            let form_data = new FormData(currentForm);
            let formElement = $("#receiptFormForm")[0];

            $("#buyersTable").DataTable().destroy();
            
            fetch('api/get-tickets-email.php', {
                method: "POST",
                body: form_data,
            })
            .then(response => response.json())
            .then(data => {
                let total = 0;
                // Handle the response data as needed
                if(data.error){
                    Swal.fire({
                        icon: "error",
                        iconColor: 'darkslategreen',
                        title: "Oops...",
                        text: data.message
                    });
                } else {
                    $tr = "";
                    console.log(data);
                    if(data.length > 0){
                        for(const row in data){
                            let item = data[row];
                            let ref_num = String(item.id).padStart(4, '0');
                            $tr += `
                                <tr>
                                    <td>${ref_num}</td>
                                    <td class="text-right">${item.total_amount}</td>
                                </tr>
                            `;
                            $("#buyersTable tbody").html($tr);

                            $("#buyersTable").removeClass("d-none");
                            total+=parseInt(item.total_amount);
                        }
                    } else {
                        Swal.fire({
                            icon: "error",
                            iconColor: 'darkslategreen',
                            title: "No data found.",
                            text: data.message
                        });
                        $tr='';
                        $("#buyersTable tbody").html($tr);
                    }
                }
                $("#buyersTable").DataTable();
                $('.total-amount-output').html(`₱ ${total.toLocaleString()}`);

                $(".preview-ticket").on('click', function () {
                    let data = $(this).data('ticket');
                    previewTicket(data);
                });
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        $("#mode_of_payment").on('change', (e) => {
            let res = "";
            if(e.target.value == 'gcash') {
                res = "09068582858 - Allen Rey Pis-an";
            } else {
                res = "09479778213 - Juliane Faith Cuizon";
            }

            $("#result_number").html(res);
        });
    </script>
</html>