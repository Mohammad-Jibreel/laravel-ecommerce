@model SubCategory
@{
    Layout = "~/Views/Shared/_AdminLayout.cshtml";
    ViewData["Title"] = "Create SubCategory";
    var categories = ViewBag.subCategory as List<SubCategory>;
}



<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Create  SubCategory</h5>
                <div class="card">
                    <div class="card-body">
                        <form method="post" asp-action="Create" asp-controller="SubCategory" asp-area="Admin">
                            <div class="mb-3">
                                <label  class="form-label">SubCategory Name</label>
                                <input  asp-for="Name" class="form-control" id="Name" aria-describedby="Name">

                                <span asp-validation-for="Name" class="text-danger"></span>

                            </div>




                            <div class="form-group">
                                <label for="CategoryId">Category:</label>
                                <select id="CategoryId" name="CategoryId" class="form-control">
                                    @foreach (var category in categories)
                                    {
                                        <option value="@category.Id">@category.Name</option>
                                    }
                                </select>
                            </div>



 

                            <div class="m-2 ">

                            <a asp-action="Index"  asp-controller="SubCategory" asp-area="Admin" class="btn btn-success">Back</a>
                            <button type="submit" class="btn btn-primary">submit</button>

                            </div>

                        </form>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</div>


@section Scripts{
    <partial name="_ValidationScriptsPartial" />
}