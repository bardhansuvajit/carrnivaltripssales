

        (() => { 

          
            

            $('input[type=checkbox]').on("click", () => filterProduct(1));
            // $('category').on("click", () => filterProduct(1));

                  


            const checkboxFilter = selector => {
                const filter = [];
                $('[data-filter=' + selector + ']:checked').each(function () {
                    filter.push($(this).val());
                });
                return filter;
            }






            const filterProduct = page => 
            {
                

                const destination_Categories_1 = checkboxFilter('destination_Categories');
                const sightseeing_loc_Categories = checkboxFilter('sightseeing_loc_Categories');

                // const productType = checkboxFilter('productType');
                
                console.log(destination_Categories_1);
                console.log(sightseeing_loc_Categories);





                $.ajax({
                    url: "fetch_sightseeing_point.php",
                    method: "POST",
                    data: {
                        page: page,
                        destination_Categories: destination_Categories_1,
                        sightseeing_loc_Categories: sightseeing_loc_Categories

                        
                    },
                    beforeSend:function () {
                        $("#sightseeing_point_Container").html(`<div class="card min-h-400px col-lg-12">
                                                    <div class="card-body justify-align-center">
                                                        <div class="spinner-border text-success" role="status">
                                                    </div>
                                                </div>`);
                        $("#pagination").html('');
                      },

                      success: function (res) {
                        try {
                             res = JSON.parse(res)
                            const products = res.products;
                            const pagination = res.pagination;
                            $("#sightseeing_point_Container").html(products);
                            $("#pagination").html(pagination);
                        } catch (e) {
                            alert(e);
                        }
                    },
                    error: function () {
                        alert("Error in sending request");
                    }
                })


            }



            filterProduct(1);


        })();
