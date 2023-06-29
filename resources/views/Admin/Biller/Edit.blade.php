﻿

@{
    Layout = "~/Views/Shared/_AdminLayout.cshtml";
    ViewData["Title"] = "Edit Biller";

}

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit  Biller</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Id </label>
                                <input type="text" disabled class="form-control" id="Id" aria-describedby="Name">
                                <div id="Id" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Biller Name</label>
                                <input type="text" class="form-control" id="Name" aria-describedby="Name">
                                <div id="Name" class="form-text text-danger">This filed is mandatory</div>
                            </div>
                            <div class="mb-3">
                                <label for="subBiller" class="form-label">Sub Biller</label>
                                <input type="text" class="form-control" id="subBiller">
                            </div>

                            <a asp-action="Index" asp-asp-controller="Biller" asp-area="Admin" class="btn btn-success">Back</a>
                            <a asp-action="Update" asp-asp-controller="Biller" asp-area="Admin" class="btn btn-primary">Update</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
