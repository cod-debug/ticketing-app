
<div id="mainAdminPage" class="d-none">
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow">
        <?php require('components/navbar.php') ?>
    </nav>
    <main>
        <div class="container bg-white p-4 my-4" style="min-height: 80vh;">
            <div class="d-flex justify-content-between align-items-center">
                <h4>Count Per Area</h4>
            </div>
            <hr />
            <div class="row" id="countPerArea">
                
            </div>
        </div>
    </main>
    <?php require('components/footer.php') ?>
</div>
<script>
    

    fetch('api/get-area-count.php', {
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
            let areas = data.result.data;
            if(data.success){
                console.log(areas);
                let areaDiv = '';

                for(const area in areas){
                    let item = areas[area];
                    let card_color = "bg-warning";
                    if(area%3 == 0){
                        card_color = "bg-success";
                        header_color = "#218036";
                    } else if (area%3 == 1){
                        card_color = "bg-primary";
                        header_color= "#045cba";
                    } else if (area%3 == 2){
                        card_color = "bg-info";
                        header_color = "#127e8b";
                    }
                    areaDiv+=`
                    <div class="col-md-4">
                        <div class="card text-center my-2">
                            <div class="card-header ${card_color}">
                                <div class="card-title p-3" style="background-color: ${header_color}; border-radius: 5px;">
                                    <h1 class="m-0">${item.total_count}</h1>
                                    <h5 class="${item.total_count > 0 ? 'text-white' : 'text-dark'} m-0"><strong>₱ ${item.total_amount}</strong></h5>
                                </div>
                            </div>
                            <div class="card-body ${card_color} py-2">
                                <p class="m-0">${item.area}</p>
                            </div>
                        </div>
                    </div>
                    `;
                }

                $("#countPerArea").html(areaDiv);
            }
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
</script>