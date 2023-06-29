@{
    Layout = "~/Views/Shared/_AdminLayout.cshtml";
    ViewData["Title"] = "Payment";

}




<div class="col d-flex align-items-stretch">
    <div class="card w-100">
        <div class="card-body p-4">
            <div class="d-flex flex-row-reverse">
                <a class="btn btn-primary p-2" asp-action="Create" asp-area="Admin" asp-controller="Payment"><i class="ti ti-plus"></i>Add Payment</a>

            </div>



            <h5 class="card-title fw-semibold mb-4">Payment</h5>
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
                                <h6 class="fw-semibold mb-0">Prodyct Name</h6>
                            </th>

                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Price</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Quantity</h6>
                            </th>

                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Image</h6>
                            </th>

                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Actions</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">1</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Sunil Joshi</h6>
                                <span class="fw-normal">Web Designer</span>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Elite Admin</p>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                                </div>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-primary rounded-3 fw-semibold">Low</span>
                                </div>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-success m-1" asp-action="Edit" asp-area="Admin" asp-controller="Payment"><i class="ti ti-edit"></i></a>
                                    <a class="btn btn-danger m-1" asp-action="Delete" asp-area="Admin" asp-controller="Payment"><i class="ti ti-trash"></i></a>

                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">2</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Andrew McDownland</h6>
                                <span class="fw-normal">Project Manager</span>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Real Homes WP Theme</p>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                                </div>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-secondary rounded-3 fw-semibold">Medium</span>
                                </div>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-success m-1" href=""><i class="ti ti-edit"></i></a>
                                    <a class="btn btn-danger m-1" href=""><i class="ti ti-trash"></i></a>

                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">3</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Christopher Jamil</h6>
                                <span class="fw-normal">Project Manager</span>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">MedicalPro WP Theme</p>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                                </div>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-danger rounded-3 fw-semibold">High</span>
                                </div>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-success m-1" href=""><i class="ti ti-edit"></i></a>
                                    <a class="btn btn-danger m-1" href=""><i class="ti ti-trash"></i></a>

                                </div>

                            </td>

                        </tr>
                        <tr>
                            <td class="border-bottom-0"><h6 class="fw-semibold mb-0">4</h6></td>
                            <td class="border-bottom-0">
                                <h6 class="fw-semibold mb-1">Nirav Joshi</h6>
                                <span class="fw-normal">Frontend Engineer</span>
                            </td>
                            <td class="border-bottom-0">
                                <p class="mb-0 fw-normal">Hosting Press HTML</p>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                                </div>
                            </td>

                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center gap-2">
                                    <span class="badge bg-success rounded-3 fw-semibold">Critical</span>
                                </div>
                            </td>
                            <td class="border-bottom-0">
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-success m-1" href=""><i class="ti ti-edit"></i></a>
                                    <a class="btn btn-danger m-1" href=""><i class="ti ti-trash"></i></a>

                                </div>

                            </td>
                        </tr>
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
        </div>
    </div>


</div>
