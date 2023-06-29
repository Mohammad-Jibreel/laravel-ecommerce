

@{
    Layout = "~/Views/Shared/_AdminLayout.cshtml";
    ViewData["Title"] = "Delete Payment";
}

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Delete  Payment</h5>
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Id </label>
                                <input type="text" disabled class="form-control" id="Id" aria-describedby="Name">
                                <div id="Id" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="Name" class="form-label">Payment Name</label>
                                <input type="text" disabled class="form-control" id="Name" aria-describedby="Name">
                                <div id="Name" class="form-text text-danger"></div>
                            </div>
                            <div class="mb-3">
                                <label for="subPayment" class="form-label">Sub Payment</label>
                                <input type="text" disabled class="form-control" id="subPayment">
                            </div>
                            <a asp-action="Index" asp-asp-controller="Payment" asp-area="Admin" class="btn btn-success">Back</a>
                            <a asp-action="Delete" asp-asp-controller="Payment" asp-area="Admin" class="btn btn-primary">Delete</a>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>