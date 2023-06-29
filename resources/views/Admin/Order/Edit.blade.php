﻿
@{
    Layout = "~/Views/Shared/_AdminLayout.cshtml";
    ViewData["Title"] = "Edit Order";

}

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit  Order</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Id </label>
                                <input type="text" disabled class="form-control" id="Id" aria-describedby="Name">
                                <div id="Id" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Order Name</label>
                                <input type="text" class="form-control" id="Name" aria-describedby="Name">
                                <div id="Name" class="form-text text-danger">This filed is mandatory</div>
                            </div>
                            <div class="mb-3">
                                <label for="subOrder" class="form-label">Sub Order</label>
                                <input type="text" class="form-control" id="subOrder">
                            </div>

                            <a asp-action="Index" asp-asp-controller="Order" asp-area="Admin" class="btn btn-success">Back</a>
                            <a asp-action="Update" asp-asp-controller="Order" asp-area="Admin" class="btn btn-primary">Update</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
