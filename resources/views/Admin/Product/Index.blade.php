@model List<Product>
@{
    Layout = "~/Views/Shared/_AdminLayout.cshtml";
    ViewData["Title"] = "Prdouct";
}

@if (TempData.ContainsKey("success"))
{
    <div class="alert alert-success">@TempData["success"]</div>
}

<div class="col d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">

            @if (Model.Count <= 0)
            {
                <div class="d-flex flex-row-reverse">
                    <a class="btn btn-primary p-2" asp-action="Create" asp-area="Admin" asp-controller="Product">
                        <i class="ti ti-plus"></i>Add Prdouct
                    </a>
                </div>
                <div class="alert alert-info mt-2">No Data Found. Add Prdouct now</div>
            }
            else
            {

                <div class="d-flex flex-row-reverse">
                    <a class="btn btn-primary p-2" asp-action="Create" asp-area="Admin" asp-controller="Prdouct">
                        <i class="ti ti-plus"></i>Add Prdouct
                    </a>
                </div>
                <h5 class="card-title fw-semibold mb-4">Prdouct</h5>
                <form class="nosubmit">
                    <input class="nosubmit" type="search" placeholder="Search...">
                </form>

                <br />
                <div class="table-responsive mt-2">
                    <table class="table text-nowrap mb-0 align-middle table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Prdouct Name</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Description</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Price</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Category</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Color</h6>
                                </th>

                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Size</h6>
                                </th>
                                <th class="border-bottom-0">

                                    <h6 class="fw-semibold mb-0">Created</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Updated</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Actions</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (var item in Model)
                            {
                                <tr>
                                    <td class="border-bottom-0">
                                        <h6 class="fw-semibold mb-0">@item.Id</h6>
                                    </td>
                                    <td class="border-bottom-0">@item.Name</td>
                                    <td class="border-bottom-0">@item.Description</td>
                                    <td class="border-bottom-0">@item.Price</td>
                                    <td class="border-bottom-0">@item.SubCategory.Name</td>
                                    <td class="border-bottom-0">@item.Color.value</td>
                                    <td class="border-bottom-0">@item.Size.value</td>
                                    <td class="border-bottom-0">@item.Created.ToShortDateString()</td>
                                    <td class="border-bottom-0">@item.Updated.ToShortDateString()</td>
                                    <td class="border-bottom-0">
                                        <div class="d-flex align-items-center">
                                            <a class="btn btn-success m-1" asp-action="Edit" asp-area="Admin" asp-route-id="@item.Id" asp-controller="Prdouct">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            <a class="btn btn-danger m-1" asp-action="Delete" asp-route-id="@item.Id" asp-area="Admin" asp-controller="Prdouct">
                                                <i class="ti ti-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            }
                        </tbody>
                    </table>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center mt-4">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            }
        </div>
    </div>
</div>


