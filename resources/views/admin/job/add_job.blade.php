@extends('admin.layout.master')
@section('content')
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row invoice-add">
                <!-- Invoice Add-->
                <div class="col-lg-9 col-12 mb-lg-0 mb-4">
                    <div class="card invoice-preview-card">
                        <div class="card-body">
                            <hr class="mx-n4">
                            <form class="source-item py-sm-3">
                                <div class="mb-3" data-repeater-list="group-a">
                                    <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="">
                                        <div class="d-flex border rounded position-relative pe-0">
                                            <div class="row w-100 m-0 p-3">
                                                <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                                                    <p class="mb-2 repeater-title">Item</p>
                                                    <select class="form-select item-details mb-2">
                                                        <option selected="" disabled="">Select Item</option>
                                                        <option value="App Design">App Design</option>
                                                        <option value="App Customization">App Customization</option>
                                                        <option value="ABC Template">ABC Template</option>
                                                        <option value="App Development">App Development</option>
                                                    </select>
                                                    <textarea class="form-control" rows="2" placeholder="Item Information"></textarea>
                                                </div>
                                                <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                    <p class="mb-2 repeater-title">Cost</p>
                                                    <input type="number" class="form-control invoice-item-price mb-2"
                                                        placeholder="00" min="12">
                                                    <div>
                                                        <span>Discount:</span>
                                                        <span class="discount me-2">0%</span>
                                                        <span class="tax-1 me-2" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Tax 1">0%</span>
                                                        <span class="tax-2" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Tax 2">0%</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12 mb-md-0 mb-3">
                                                    <p class="mb-2 repeater-title">Qty</p>
                                                    <input type="number" class="form-control invoice-item-qty"
                                                        placeholder="1" min="1" max="50">
                                                </div>
                                                <div class="col-md-1 col-12 pe-0">
                                                    <p class="mb-2 repeater-title">Price</p>
                                                    <p class="mb-0">$24.00</p>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                                <i class="bx bx-x fs-4 text-muted cursor-pointer"
                                                    data-repeater-delete=""></i>
                                                <div class="dropdown">
                                                    <i class="bx bx-cog bx-xs text-muted cursor-pointer more-options-dropdown"
                                                        role="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        data-bs-auto-close="outside" aria-expanded="false">
                                                    </i>
                                                    <div class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                                        aria-labelledby="dropdownMenuButton" style="">

                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <label for="discountInput"
                                                                    class="form-label">Discount(%)</label>
                                                                <input type="number" class="form-control"
                                                                    id="discountInput" min="0" max="100">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="taxInput1" class="form-label">Tax 1</label>
                                                                <select name="group-a[0][tax-1-input]" id="taxInput1"
                                                                    class="form-select tax-select">
                                                                    <option value="0%" selected="">0%</option>
                                                                    <option value="1%">1%</option>
                                                                    <option value="10%">10%</option>
                                                                    <option value="18%">18%</option>
                                                                    <option value="40%">40%</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="taxInput2" class="form-label">Tax 2</label>
                                                                <select name="group-a[0][tax-2-input]" id="taxInput2"
                                                                    class="form-select tax-select">
                                                                    <option value="0%" selected="">0%</option>
                                                                    <option value="1%">1%</option>
                                                                    <option value="10%">10%</option>
                                                                    <option value="18%">18%</option>
                                                                    <option value="40%">40%</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-divider my-3"></div>
                                                        <button type="button"
                                                            class="btn btn-label-primary btn-apply-changes">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="repeater-wrapper pt-0 pt-md-4" data-repeater-item="" style="">
                                        <div class="d-flex border rounded position-relative pe-0">
                                            <div class="row w-100 m-0 p-3">
                                                <div class="col-md-6 col-12 mb-md-0 mb-3 ps-md-0">
                                                    <p class="mb-2 repeater-title">Item</p>
                                                    <select class="form-select item-details mb-2">
                                                        <option selected="" disabled="">Select Item</option>
                                                        <option value="App Design">App Design</option>
                                                        <option value="App Customization">App Customization</option>
                                                        <option value="ABC Template">ABC Template</option>
                                                        <option value="App Development">App Development</option>
                                                    </select>
                                                    <textarea class="form-control" rows="2" placeholder="Item Information"></textarea>
                                                </div>
                                                <div class="col-md-3 col-12 mb-md-0 mb-3">
                                                    <p class="mb-2 repeater-title">Cost</p>
                                                    <input type="number" class="form-control invoice-item-price mb-2"
                                                        placeholder="00" min="12">
                                                    <div>
                                                        <span>Discount:</span>
                                                        <span class="discount me-2">0%</span>
                                                        <span class="tax-1 me-2" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Tax 1">0%</span>
                                                        <span class="tax-2" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title=""
                                                            data-bs-original-title="Tax 2">0%</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-12 mb-md-0 mb-3">
                                                    <p class="mb-2 repeater-title">Qty</p>
                                                    <input type="number" class="form-control invoice-item-qty"
                                                        placeholder="1" min="1" max="50">
                                                </div>
                                                <div class="col-md-1 col-12 pe-0">
                                                    <p class="mb-2 repeater-title">Price</p>
                                                    <p class="mb-0">$24.00</p>
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex flex-column align-items-center justify-content-between border-start p-2">
                                                <i class="bx bx-x fs-4 text-muted cursor-pointer"
                                                    data-repeater-delete=""></i>
                                                <div class="dropdown">
                                                    <i class="bx bx-cog bx-xs text-muted cursor-pointer more-options-dropdown"
                                                        role="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                        data-bs-auto-close="outside" aria-expanded="false">
                                                    </i>
                                                    <div class="dropdown-menu dropdown-menu-end w-px-300 p-3"
                                                        aria-labelledby="dropdownMenuButton">

                                                        <div class="row g-3">
                                                            <div class="col-12">
                                                                <label for="discountInput"
                                                                    class="form-label">Discount(%)</label>
                                                                <input type="number" class="form-control"
                                                                    id="discountInput" min="0" max="100">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="taxInput1" class="form-label">Tax 1</label>
                                                                <select name="group-a[1][tax-1-input]" id="taxInput1"
                                                                    class="form-select tax-select">
                                                                    <option value="0%" selected="">0%</option>
                                                                    <option value="1%">1%</option>
                                                                    <option value="10%">10%</option>
                                                                    <option value="18%">18%</option>
                                                                    <option value="40%">40%</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="taxInput2" class="form-label">Tax 2</label>
                                                                <select name="group-a[1][tax-2-input]" id="taxInput2"
                                                                    class="form-select tax-select">
                                                                    <option value="0%" selected="">0%</option>
                                                                    <option value="1%">1%</option>
                                                                    <option value="10%">10%</option>
                                                                    <option value="18%">18%</option>
                                                                    <option value="40%">40%</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-divider my-3"></div>
                                                        <button type="button"
                                                            class="btn btn-label-primary btn-apply-changes">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <button type="button" class="btn btn-primary" data-repeater-create="">Add
                                            Item</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Add-->
                <!-- Invoice Actions -->
                <div class="col-lg-3 col-12 invoice-actions">
                    <div class="card mb-4">
                        <div class="card-body">
                            <button type="button" class="btn btn-label-secondary d-grid w-100">Save</button>
                        </div>
                    </div>
                </div>
                <!-- /Invoice Actions -->
            </div>
            <!-- Offcanvas -->
            <!-- Send Invoice Sidebar -->
            <div class="offcanvas offcanvas-end" id="sendInvoiceOffcanvas" aria-hidden="true">
                <div class="offcanvas-header mb-3">
                    <h5 class="offcanvas-title">Send Invoice</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body flex-grow-1">
                    <form>
                        <div class="mb-3">
                            <label for="invoice-from" class="form-label">From</label>
                            <input type="text" class="form-control" id="invoice-from" value="shelbyComapny@email.com"
                                placeholder="company@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="invoice-to" class="form-label">To</label>
                            <input type="text" class="form-control" id="invoice-to" value="qConsolidated@email.com"
                                placeholder="company@email.com">
                        </div>
                        <div class="mb-3">
                            <label for="invoice-subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="invoice-subject"
                                value="Invoice of purchased Admin Templates" placeholder="Invoice regarding goods">
                        </div>
                        <div class="mb-3">
                            <label for="invoice-message" class="form-label">Message</label>
                            <textarea class="form-control" name="invoice-message" id="invoice-message" cols="3" rows="8">Dear Queen Consolidated,
                        Thank you for your business, always a pleasure to work with you!
                        We have generated a new invoice in the amount of $95.59
                        We would appreciate payment of this invoice by 05/11/2021
                      </textarea>
                        </div>
                        <div class="mb-4">
                            <span class="badge bg-label-primary">
                                <i class="bx bx-link bx-xs"></i>
                                <span class="align-middle">Invoice Attached</span>
                            </span>
                        </div>
                        <div class="mb-3 d-flex flex-wrap">
                            <button type="button" class="btn btn-primary me-3" data-bs-dismiss="offcanvas">Send</button>
                            <button type="button" class="btn btn-label-secondary"
                                data-bs-dismiss="offcanvas">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Send Invoice Sidebar -->
            <!-- /Offcanvas -->
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
@endsection