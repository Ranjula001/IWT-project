<script src="Js/sendToken.js"></script>
<div class="container-fluid w-auto m-2 border">
    <div class="row">
        <div class="col-4 border-end">
            <div class="row border-bottom">
                <div class="col">
                    <div class="row border-bottom p-4 m-2 ">
                        <div class="col-2 align-middle">
                            <img src="IMAGE/userImage.png" class="img-fluid">
                        </div>
                        <div class="col">
                            <div class="fw-bold">
                                Name of the developer
                            </div>
                            <div class="">
                                Joined date
                            </div>
                            <div class="text-end pt-2">
                                123 $
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center pb-2">
                        <div class="col-2 border-end">
                            <div class="text-center">
                                1M+
                            </div>
                            <div class="text-center" style="font-size: 10px">
                                Downloads
                            </div>
                        </div>
                        <div class="col-2 border-end">
                            <div class="text-center">
                                5
                            </div>
                            <div class="text-center" style="font-size: 10px">
                                Apps
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="text-center">
                                3.9
                            </div>
                            <div class="text-center" style="font-size: 10px">
                                Rating
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="fw-bold pt-2 pb-2">
                        Apps uploaded by me
                    </div>
                    <div class="row m-2 border">
                        <div class="col p-2" style="overflow: auto; height: 300px;">
                            <?php for ($i = 0; $i < 10; $i++) { ?>
                                <div class="p-2 border mb-2">
                                    <div class="row w-80">
                                        <div class="col-2">
                                            <img src="IMAGE/LMain.png" class="img-thumbnail">
                                        </div>
                                        <div class="col">
                                            <div class="text-justify" style="font-size: 10px;">
                                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                            </div>
                                        </div>
                                        <div class="col-2">
                                            <div class="border text-center p-1 mb-2" style="cursor: pointer; font-size: 10px;">View</div>
                                            <div class="border text-center p-1" style="cursor: pointer; font-size: 10px;">Delete</div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="fw-bold p-2" style="font-size: 20px;">
                Edit my profile
            </div>
            <div class="row mt-2">
                <div class="col-2 align-middle">
                    <img src="IMAGE/userImage.png" class="img-fluid">
                </div>
                <div class="col">
                    <div>
                        Select a new profile picture
                    </div>
                    <div class="form-group files mt-2" style="font-size: 10px; width:200px;">
                        <label>Upload Your File </label>
                        <input type="file" class="form-control" accept="image/*">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col p-4" style="font-size: 10px;">
                    <div class="row mb-2">
                        <div class="col-2">
                            Name:
                        </div>
                        <div class="col-4">
                            <input class="w-100">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2">
                            Email:
                        </div>
                        <div class="col-4">
                            <input class="w-100">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2">
                            Company:
                        </div>
                        <div class="col-4">
                            <input class="w-100">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2">
                            Current Password:
                        </div>
                        <div class="col-4">
                            <input class="w-100">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2">
                            New Password:
                        </div>
                        <div class="col-4">
                            <input class="w-100">
                        </div>
                    </div>

                    <div class="row mt-4 mb-2">
                        <div class="col fw-bold">
                            Edit Bank Details:
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col-2 mr-2">
                            Card No:
                        </div>
                        <div class="col-4">
                            <input class="w-100">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-2 mr-2">
                        </div>
                        <div class="col">
                            <div class="mr-2 d-inline">
                                Month:
                            </div>
                            <input style="width: 25px;">
                            <div class="mr-2 d-inline">
                                Year:
                            </div>
                            <input style="width: 25px;">
                            <div class="mr-2 d-inline">
                                CVV:
                            </div>
                            <input style="width: 30px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-end">
                <div class="col-2">
                    <div class="border text-center p-1 mb-2" style="cursor: pointer; font-size: 10px;">Cancel</div>
                </div>
                <div class="col-2">
                    <div class="border text-center p-1 mb-2" style="cursor: pointer; font-size: 10px;">Save</div>
                </div>
            </div>
        </div>
    </div>
</div>