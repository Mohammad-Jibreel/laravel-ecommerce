@extends('Admin.layout')
@section('content')

<div class="container-fluid">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Create  Wishlist</h5>
                <div class="card">
                    <div class="card-body">
                        <form asp-action="create" asp-area="Admin" asp-controller="Wishlist" method="post" >
                            <div class="mb-3">
                                <label asp-for="Wishlist.Name" class="form-label"></label>
                                <input asp-for="Wishlist.Name" class="form-control" id="Wishlist.Name" aria-describedby="Wishlist.Name">
                                <span id="Wishlist.Name" class="form-text text-danger" asp-validation-for="Wishlist.Name"></span>
                            </div>



                            <div class="mb-3">
                                <label asp-for="Wishlist.Price" class="form-label"></label>
                                <input asp-for="Wishlist.Price" class="form-control" id="Wishlist.Price" aria-describedby="Wishlist.Price">
                                <span asp-validation-for="Wishlist.Price" id="Wishlist.Price" class="form-text text-danger"></span>
                            </div>



                            <div class="mb-3">
                                <label asp-for="Wishlist.quantity" class="form-label"></label>
                                <input asp-for="Wishlist.quantity" class="form-control" id="Wishlist.quantity" aria-describedby="Wishlist.quantity">
                                <span asp-validation-for="Wishlist.quantity" id="Wishlist.quantity" class="form-text text-danger"></span>
                            </div>

                            @*<div class="mb-3">
                            <select asp-for="@Model.Wishlist.SubCategory" asp-items="@Model.SubCategoryList"  type="text" class="form-select" id="">
                            <option disabled selected>--Select Category--</option>
                            </select>
                            </div>*@


                           @* <div class="mb-3">
                                <select asp-for="@Model.Wishlist.SubCategory.Category" asp-items="@Model.CategoryList" type="text" class="form-select" id="">
                                    <option disabled selected>--Select Category--</option>
                                </select>
                            </div>
*@
                               @*<div class="class=" mb-3">
                                <label for="SubCategoryList">SubCategoryList:</label>
                                <select asp-for="@Model.SubCategoryList" class="form-control">
                                    <option value="">-- Select SubCategoryList --</option>
                                    @foreach (var subCategoryList in Model.SubCategoryList)
                                    {
                                        <option value="@subCategoryList.Value">@subCategoryList.Value</option>
                                    }
                                </select>
                            </div>
*@


                            <div class="class=" mb-3">
                                <label for="Color">Color:</label>
                                <select asp-for="ColorList" class="form-control">
                                    <option value="">-- Select Color --</option>
                                    @foreach (var color in Model.ColorList)
                                    {
                                        <option value="@color.Id">@color.value</option>
                                    }
                                </select>
                            </div>




                            <div class="class=" mb-3">
                                <label for="Size">Size:</label>
                                <select asp-for="SizeList" class="form-control">
                                    <option value="">-- Select Size --</option>
                                    @foreach (var size in Model.SizeList)
                                    {
                                        <option value="@size.Id">@size.value</option>
                                    }
                                </select>
                            </div>



                            <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Picture for Wishlist</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple />
                            </div>




                           @* <div class="mb-3">
                                <select asp-for="@Model.Wishlist.SubCategory.Category" asp-items="@Model.CategoryList" type="text" class="form-select" id="">
                                    <option selected>Choose status ... </option>
                                    <option value="0">Not Active</option>
                                    <option value="1">Active</option>
                                </select>
                            </div>*@
                          @*  <div class="mb-3">
                                <select asp-for="SubcategoryId" asp-items="ViewBag.CategoryList" type="text" class="form-select" id="SubcategoryId">
                                    <option disabled selected>--Select Category--</option>
                                    </select>
                            </div>*@


                             @* <div class="mb-3">
                                <select asp-for="@Model.Wishlist.SubCategory" asp-items="@Model.CategoryList" type="text" class="form-select" id="">
                            <option disabled selected>--Select Category--</option>
                            </select>
                            </div>*@

                            <a asp-action="Index" asp-asp-controller="Wishlist" asp-area="Admin" class="btn btn-success">Back</a>
                            <button type="submit" class="btn btn-primary">submit</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
