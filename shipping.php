<?php include 'layouts\header.html';?>
<div class="shipment">

<div class="container" >
    <div class="row">
        <div class="col p-2">
            <h1> Create a Shipment</h1>
            <p> *indicates required field</p>
        </div>
        <div class="card p-3">
            <div>
                <h5> Ship From</h5>
            </div>
            <form action="">
                
                <input type="text" class=" form-control" placeholder="Country name">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder=" Full Name or Company Name*" required>

                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder=" Contact Name">

                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder="Email*">
                    </div>
                    <div class="col-md-6">
                    <input type="text" class="form-control mt-4" placeholder="Phone">
                    </div>
                </div>
                <div>
                    <input type="text" class="form-control mt-4" placeholder="Home Address">
                </div>


                
                







            </form>







        </div>





        <div class="card p-3 mt-5">
            <div>
                <h5> Ship From</h5>
            </div>
            <form action="">
                
                <input type="text" class=" form-control" placeholder="Country name">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder=" Full Name or Company Name*">

                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder=" Contact Name">

                    </div>


                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control mt-4" placeholder="Email*">
                    </div>
                    <div class="col-md-6">
                    <input type="text" class="form-control mt-4" placeholder="Phone">
                    </div>
                </div>
                <div>
                    <input type="text" class="form-control mt-4" placeholder="Home Address">
                </div>

                
                
                







            </form>







        </div>





    </div>







</div>

<div class="but">
    <button class="bship"> Ship Now</button>
</div>
</div>



<style>

    .shipment{
        background-color: aliceblue;
        height: 850px;
    }
    

    
    .bship{
        margin-left: 20px;
        border-radius: 20px;
        padding: 10px;
        color: black;
        background-color: gold;
        border: 1px aliceblue;
        margin-top: 30px;
        width: 15%;
    }
    


</style>

<?php include 'layouts\footer.html';?>