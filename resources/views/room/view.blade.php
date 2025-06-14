<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<link rel="stylesheet" href="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />

<script src="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>

<style>
    /* .select2-container--open {
        z-index: 9999;
    } */
    .swal2-container {
        z-index: 9999 !important;
    }
    .nav-pills .nav-link.active {
        border: 2px solid #007bff;
        border-width: 1px;
        border-style: solid;
    }
    .nav-item .nav-link {
        border: none; /* ป้องกันไม่ให้มีเส้นโดยตรงบน .nav-link */
    }
    .dam {
        color: rgb(23, 23, 23);
        font-weight: 500;
        font-size: medium;
    }
    .dam-l {
        font-size: unset;
        color: rgb(23, 23, 23);
        font-weight: 410;
    }
    .nav-pills {
        --bs-nav-pills-link-active-bg: #ffffff;
    }
</style>
<div class="modal-content rounded-0">
    <div class="modal-header rounded-0">
        <span class="modal-title">
            <span class="h5" style="color: white;">&nbsp;{{ @$room->name }}&nbsp;</span>
        </span>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="col-md-12" style="padding-right: unset !important;">
        <div class="card shadow-none bg-transparent mb-3">
            <div class="card-body">
                <ul class="nav nav-pills" role="tablist" style="justify-content: space-between;padding: 0 35px;">
                    <li class="nav-item" role="presentation">
                    {{-- <button type="button" class="btn btn-outline-primary">Primary</button> --}}
                      <button class="btn btn-outline-info nav-link active" 
                        role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-edit" aria-controls="navs-pills-top-edit" aria-selected="false" tabindex="-1">
                        <span>
                          <i class="ti ti-users pe-1"></i>
                          <b class="dam">
                            ผู้เช่า
                          </b>
                        </span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn btn-outline-danger nav-link" 
                        role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-contract" aria-controls="navs-pills-top-contract" aria-selected="false" tabindex="-1">
                        <span>
                          <i class="ti ti-vocabulary pe-1"></i>
                          <b class="dam">
                          สัญญาเช่า
                          </b>
                        </span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn btn-outline-primary nav-link" 
                                role="tab" data-bs-toggle="tab"
                                data-bs-target="#navs-pills-top-payment"
                                aria-controls="navs-pills-top-payment"
                                aria-selected="false" tabindex="-1"
                                {{-- onclick="get_bill('{{$bill_month[0]->year."-".$bill_month[0]->month}}')" --}}
                                >
                        <span>
                          <i class="ti ti-cash-banknote pe-1"></i>
                          <b class="dam">
                          ชำระเงิน
                          </b>
                        </span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn btn-outline-success nav-link" 
                        role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-assets" aria-controls="navs-pills-top-assets" aria-selected="false" tabindex="-1">
                        <span>
                          <i class="ti ti-building-warehouse pe-1"></i>
                          <b class="dam">
                          รายการทรัพย์สิน
                          </b>
                        </span>
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="btn btn-outline-warning nav-link" 
                        role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-top-MoveOut" aria-controls="navs-pills-top-MoveOut" aria-selected="false" tabindex="-1">
                        <span>
                          <i class="ti ti-door-exit pe-1"></i>
                          <b class="dam">
                          ย้ายออก
                          </b>
                        </span>
                      </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="modal-body" style="padding: 0 3em;">
            <div class="nav-align-top mb-3">
                    <div class="tab-content" style="box-shadow: unset;padding:0px">
                        
{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า
ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า ผู้เช่า

////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

                      <div class="tab-pane fade active show mb-5" id="navs-pills-top-edit" role="tabpanel">
                        <div class="card shadow-none bg-transparent">
                            <div class="card-body mb-4" style="background-color: #f5f5f5;border-radius: 1em;border: 1.6px solid #b5b5b56b;">
                                <div class="d-flex">
                                    <div class="col-sm-2">
                                        <img src="/main_picture/user-detail.png" width="100%" style="border-radius: 50%;">
                                    </div>
                                    <div class="col-sm-9 px-4">
                                        <b class="dam border-bottom border-light mb-2" style="display: block;">
                                            {{ $room_for_rent->prefix.' '.$room_for_rent->full_name }}
                                        </b>
                                            <b class="dam-l">
                                                เบอร์โทร :
                                            </b>
                                            <span>{{ $room_for_rent->phone }}</span>
                                            <br>
                                            <b class="dam-l">
                                                เลขบัตรประชาชน :
                                            </b>
                                            <span>{{ $room_for_rent->id_card_number }}</span>
                                            
                                                <div class="row mt-3">
                                                    <div class="col-md-4" style="padding-right: unset !important;">
                                                    </div>
                                                    <div class="col-md-4" style="padding-right: 0">
                                                        <select name="change_room" id="change_room" class="select2 form-select form-select-sm" data-style="btn-default" onchange="change_room(this.val)">
                                                                <option value="all">ย้ายห้อง</option>
                                                                @foreach ($otherRooms as $or)
                                                                    <option value="{{ $or->id }}">{{ $or->name }}</option>
                                                                @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 d-flex justify-content-bottom align-items-bottom">
                                                        <div class="text-end">
                                                            <button type="submit" id="change_room_btn" class="btn btn-warning waves-effect waves-light" disabled>ยืนยัน</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                            </div>
                            {{-- <button type="button" class="btn btn-success waves-effect waves-light mt-3 m-auto"></button> --}}
                            <button class="btn btn-success waves-effect waves-light mt-3 m-auto"
                                    tabindex="0" aria-controls="DataTables_Table_0"
                                    type="button" aria-haspopup="dialog"
                                    aria-expanded="false" data-bs-toggle="modal" data-bs-target="#addRenter">
                                <span><i class="ti ti-plus"></i> เพิ่มข้อมูลผู้เช่า</span>
                            </button>

                        </div>
                    </div>
                    



{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////

สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า
สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า สัญญาเช่า

//////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

                        <div class="tab-pane fade" id="navs-pills-top-contract" role="tabpanel">
                            
                        
                        <form id="form_contract" @if ($room->status == 2) style="display:none;" @endif>
                            @csrf
                            <input type="hidden" name="ref_renter_id" value="{{ $room_for_rent->id }}">
                            <input type="hidden" name="contract[1][ref_room_id]" value="{{ @$room->id }}">
                            <div class="m-2" style="border: 1px solid #dbdbdb;border-radius: 5px;" id="">
                                <h5 class="border-bottom p-2" style="background-color: rgb(255, 248, 237);">
                                    <i class="tf-icons ti ti-vocabulary text-main" style="font-size: 25px;"></i>
                                    กรุณากรอกรายละเอียดสัญญาเช่า
                                </h5>
                                <div class="row g-2 p-4 pt-1">
                                    <div class="col-sm-12">
                                        <select name="ref_renter_id" id="select2RenterContract2" class="select2 form-select form-select-lg" onchange="get_room_rental_contract(this.value)" required>
                                            <option selected disabled hidden value="no">เลือกข้อมูลจากผู้เช่า</option>
                                            @foreach ($renter as $rent)
                                                <option value="{{ $rent->id }}" selected>{{ $rent->prefix.' '.$rent->name.' '.$rent->surname }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="row col-sm-12 g-2" id="room-form-contract">
                                        @include('room/room-form-contract')
                                    </div>
                                </div>
                            <div class="modal-footer rounded-0 justify-content-center">
                                <button type="button" class="btn btn-label-secondary" onclick="get_contract()">ยกเลิก</button>
                                <button type="submit" class="btn btn-main">บันทึกสัญญา</button>
                            </div>
                            </div>
                        </form>
                        
                        
                        <div class="m-2" id="room-detail-contract"
                            @if ($room->status != 2)
                                style="display:none;"
                            @endif
                        >
                            {{-- @include('room/room-detail-contract') --}}
                        </div>

                      </div>
<script>
    edit_contract();
    function edit_contract(){   // function ดึงข้อมูล แสดง form แก้ไขสัญญา
        $.ajax({
            type: "GET",
            url: "{{ $page_url }}/get-room-form-contract/{{$room->id}}",
            success: function(data) {
                $("#room-form-contract").html(data);

                initContractFormScript();
            }
        });

        $('#form_contract').show(); // ซ่อน Form แก้ไขสัญญา
        $('#room-detail-contract').hide(); // แสดง ข้อมูลสัญญา
    }
    

    if("{{$room->status}}" == 2 ){   // ถ้าทำสัญญาแล้ว ให้เรียกใช้ funtion get_contract()
        get_contract();
    }


    function get_contract(){   // function ดึงข้อมูล แสดง ข้อมูลสัญญา
        $.ajax({
            type: "GET",
            url: "{{ $page_url }}/get-room-detail-contract/{{$room->id}}",
            success: function(data) {
                $("#room-detail-contract").html(data);
            }
        });

        $('#form_contract').hide(); // ซ่อน Form แก้ไขสัญญา
        $('#room-detail-contract').show(); // แสดง ข้อมูลสัญญา
    }
    
    document.getElementById('add_expenses').addEventListener('click', function() {
        var newExpense = document.getElementById('new-expense-template').cloneNode(true);
        newExpense.style.display = 'block';
        newExpense.removeAttribute('id');
        document.getElementById('expenses-list').appendChild(newExpense);
        newExpense.querySelector('.remove-expense').addEventListener('click', function() {
            newExpense.remove();
        });
    });
</script>




{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน
ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน ชำระเงิน

////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////// --}}
                          
                      <div class="tab-pane fade" id="navs-pills-top-payment" role="tabpanel">
                            <label class="mb-1">เลือกบิลย้อนหลัง</label>
                            <select name="month" id="select2month" class="select2 form-select form-select-lg" onchange="get_bill(this.value)" required>
                                <option value="2025-6">{{ $month_thai[6] }} 2025</option>
                                <option value="2025-5">{{ $month_thai[5] }} 2025</option>
                                <option value="2025-4">{{ $month_thai[4] }} 2025</option>
                            </select>
                        <div id="bill">
                            
                        </div>
                    </div>
{{-- <script>
    const selectMonth = document.getElementById("select2month");

    const thaiMonths = [
        "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน",
        "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    ];

    const now = new Date();
    let currentYear = now.getFullYear();
    let currentMonth = now.getMonth(); // 0 = มกราคม

    while (currentYear > 2025 || (currentYear === 2025 && currentMonth >= 0)) {
        const value = `${currentYear}-${String(currentMonth + 1).padStart(2, '0')}`;
        const text = `${thaiMonths[currentMonth]} ${currentYear}`;

        const option = document.createElement("option");
        option.value = value;
        option.textContent = text;

        selectMonth.appendChild(option);

        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
    }
</script> --}}




{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน
รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน รายการทรัพย์สิน

////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

                        <div class="tab-pane fade mb-5 px-5" id="navs-pills-top-assets" role="tabpanel">
                          {{-- <label class="mb-2" style="font-weight: 500;font-size: large;color:black;margin-left:30px;" for="">รายการทรัพย์สินทั้งหมด</label> --}}
                              <table class="table table-detail table-bordered">
                                  <thead>
                                      <tr>
                                          <th style="vertical-align: middle;font-weight: 500;">รายการ</th>
                                          <th style="vertical-align: middle;font-weight: 500;">ค่าปรับ</th>
                                          <th width="30%" style="vertical-align: middle;font-weight: 500;">สถานะ</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($asset as $asset_v)
                                      <tr>
                                          <td> {{ $asset_v->name }} </td>
                                          <td> {{number_format($asset_v->fine)}} </td>
                                          <td>
                                            @if (@$asset_v->room_has_asset->status == 1)
                                                <span class="text-success">
                                                    <i class="ti ti-checkbox"></i>
                                                    มี
                                                </span>
                                            @endif
                                            <a href="javascript:void(0);" onclick="getDetailAsset({{ @$room->id}},{{$asset_v->id}})"><span class="badge bg-label-dark">ตั้งค่าข้อมูล</span></a>
                                          </td>
                                      </tr>
                                    @endforeach
                                      {{-- <tr>
                                          <td>ตู้เย็น</td>
                                          <td> {{number_format(2000)}} </td>
                                          <td>
                                            <span class="text-success">
                                                <i class="ti ti-checkbox"></i>
                                                มี
                                            </span>
                                          </td>
                                      </tr> --}}
                                  </tbody>
                              </table>
                              
                              
                          </div>





{{-- ////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////

ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก
ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก ย้ายออก

////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////// --}}

                          <div class="tab-pane fade" id="navs-pills-top-MoveOut" role="tabpanel">
                            <div class="alert alert-success text-black p-2" role="alert"> รายละเอียดสัญญาเช่า</div>
                                <table class="table table-detail table-bordered">
                                    <thead>
                                        <tr>
                                            <th width="50%" style="vertical-align: middle;font-weight: 500;">วันที่ทำสัญญา : 03/06/2024</th>
                                            <th width="50%" style="vertical-align: middle;font-weight: 500;">วันที่สิ้นสุดสัญญา : 28/06/2024</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> สถานะสัญญา </td>
                                            <td class="text-success">ยังไม่หมดสัญญา</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="alert alert-warning p-2 mt-4" role="alert" align="center">
                                            <i class="ti ti-door-exit me-1"></i>ผู้เช่าย้ายออก
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="alert alert-danger p-2 mt-4" role="alert" align="center">
                                            <i class="ti ti-run me-1"></i>ผู้เช่าหนี
                                        </div>
                                    </div>
                                </div>

                                {{-- /////////////////////////////// --}}
                                
                                <label class="mb-0 text-black" style="font-weight: 500;font-size: large;" for="">
                                    <span class="badge badge-center rounded-pill bg-primary me-1" style="background-color: #54BAB9 !important;">1</span>
                                    รายการบิล
                                </label>

                                <table class="table table-detail table-bordered mt-4">
                                    <thead>
                                        <tr>
                                            <th style="vertical-align: middle;font-weight: 500;">รายการ</th>
                                            <th style="vertical-align: middle;font-weight: 500;">
                                                จำนวนเงิน (บาท)
                                            </th>
                                            <th>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                บิลค่าเช่าห้องเดือน 3/2024
                                                <span class="mx-2 badge bg-label-danger">ค้างชำระ</span>
                                            </td>
                                            <td>
                                                <span>{{ number_format(4000) }}</span>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                  <button class="btn btn-main dropdown-toggle" type="button" id="paymentDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    ยืนยันการชำระเงิน
                                                  </button>
                                                  <ul class="dropdown-menu" aria-labelledby="paymentDropdown">
                                                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="pay(1)">ชำระเงิน</a></li>
                                                    <li><a class="dropdown-item" href="javascript:void(0)" onclick="pay(2)">หักจากเงินประกัน</a></li>
                                                  </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <script>
                                    function pay(id){
                                        if(id == 1){
                                            $('#pay1').show();
                                            $('#pay2').hide();
                                        }else{
                                            $('#pay1').hide();
                                            $('#pay2').show();
                                        }
                                    }
                                  </script>
                                  <div style="border: 1px solid #dbdade;padding: 15px 2px;">
                                <div class="mt-3" id="pay1" style="display: none;">
                                      <h5 class="text-center">ยอดค้างชำระเงินทั้งหมด&nbsp; 4,000 &nbsp;บาท
                                      </h5>
                                      <div class="mb-3 pb-4">
                                          <div class="d-flex">
                                              <div class="flex-grow-1 ms-3 g-3 row">
                                                  <b class="text-black">รูปแบบการชำระเงิน</b> <br>
                                                          <div class="col-sm-11">
                                                              <input name="payment_format" class="form-check-input" type="radio" id="payfull" value="1" checked>
                                                              <label class="form-check-label" for="payfull"> จ่ายเต็มจำนวน </label>
                                                          </div>
                                                          <div class="col-sm-11">
                                                              <input name="payment_format" class="form-check-input" type="radio" id="checksplit" value="2"> 
                                                              <label class="form-check-label" for="checksplit"> แบ่งจ่าย </label>
                                                          </div>
                                                <div class="col-sm-11" id="divsplit" style="display: none;">
                                                    <div class="row">
                                                        <label>รายการ</label>
                                                        <div class="mt-2 col-sm-6">
                                                            <input type="text" class="form-control" placeholder="รายการ" value=""/>
                                                        </div>
                                                        <div class="mt-2 col-sm-3">
                                                            <input name="expenses_price" type="text" class="form-control calculate_2" oninput="calculatePrice_2()" placeholder="จำนวนเงิน"
                                                            value=""
                                                            />
                                                        </div>
                                                    </div>
                                                        <div class="row mt-2" id="expenses-split-container">
                                                        </div>
                                                        <div class="mt-4 text-end col-12">
                                                            <button
                                                                    id="add_expenses_split"
                                                                    style="padding-right: 14px;padding-left: 14px;"
                                                                    class="btn btn-sm buttons-collection btn-label-warning waves-effect waves-light me-2"
                                                                    tabindex="0" aria-controls="DataTables_Table_0"
                                                                    type="button" aria-haspopup="dialog"
                                                                    aria-expanded="false">
                                                                <span>
                                                                <i class="ti ti-plus"></i> เพิ่มรายการ</span>
                                                            </button>
                                                        </div>
                                                        <div class="col-sm-11 mt-3 mb-3">
                                                            <label>หมายเหตุ</label>
                                                            <input type="text" class="form-control" placeholder="หมายเหตุ" />
                                                        </div>
                                                        
                                                </div>
                                                <script>
                                                  document.getElementById('checksplit').addEventListener('change', function() {
                                                      document.getElementById('divsplit').style.display = this.checked ? 'block' : 'none';
                                                      document.getElementById('totalsplit').style.display = this.checked ? 'block' : 'none';
                                                      document.getElementById('totalpayfull').style.display = this.checked ? 'none' : 'block';
                                                  });
                      
                                                  document.getElementById('payfull').addEventListener('change', function() {
                                                      document.getElementById('divsplit').style.display = this.checked ? 'none' : 'block';
                                                      document.getElementById('totalsplit').style.display = this.checked ? 'none' : 'block';
                                                      document.getElementById('totalpayfull').style.display = this.checked ? 'block' : 'none';
                                                  });
                                                </script>
                                            </div>
                                          </div>
                                      </div>
                      
                                      <div class="mb-3 pb-4">
                                          <div class="d-flex">
                                              <div class="flex-grow-1 ms-3 g-3 row">
                                                  <b class="text-black">ช่องทางการชำระเงิน</b> <br>
                                                  <div class="col-sm-11">
                                                      <input name="payment_channel" class="form-check-input" type="radio" id="payCash" value="1" checked onclick="togglePaymentFields()">
                                                      <label class="form-check-label" for="payCash"> เงินสด </label>
                                                  </div>
                                                  
                                                  <div id="paymentDetails2">
                                                      <div class="col-sm-6 mb-2">
                                                          <label for="transfer_date">วันที่ชำระเงิน</label>
                                                          <input type="text" name="transfer_date" class="form-control" placeholder="" id="transfer_date" required autocomplete="off" value="{{date('d/m/Y')}}"/>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-11">
                                                      <input name="payment_channel" class="form-check-input" type="radio" id="transferMoney" value="2" onclick="togglePaymentFields()"> 
                                                      <label class="form-check-label" for="transferMoney"> โอนเงิน </label>
                                                  </div>
                                      
                                                  <!-- แสดงเมื่อเลือก โอนเงิน -->
                                                  <div id="paymentDetails" style="display:none;">
                                                      
                                                      <div class="col-sm-6 mb-2">
                                                            <label>เลือกบัญชีธนาคาร</label>
                                                            <select class="select2 form-select mb-2" name="bank" id="exampleFormControlSelect1">
                                                              {{-- <option value="" disabled="" selected="selected">บัญชีธนาคาร</option> --}}
                                                              {{-- @foreach ($bank as $r_bank) --}}
                                                                  <option value="">กรุงเทพ</option>
                                                                  <option value="">กสิกร</option>
                                                              {{-- @endforeach --}}
                      
                                                        </div>
                                                      <div class="col-sm-4 mb-2">
                                                          <input type="hidden" name="">
                                                      </div>
                                                          <div class="col-sm-3 mb-2">
                                                              <label for="transfer_time">เวลาโอนเงิน</label>
                                                              <input type="time" name="transfer_time" class="form-control" placeholder="" id="transfer_time" required autocomplete="off"/>
                                                          </div>
                                                          <div class="col-sm-6 mb-2">
                                                              <label for="transfer_date">วันที่โอนเงิน</label>
                                                              <input type="text" name="transfer_date" class="form-control" placeholder="" id="transfer_date" required autocomplete="off" value="{{date('d/m/Y')}}"/>
                                                          </div>
                                                      <div class="col-sm-10 mt-3">
                                                          <label for="paymentReceipt">แนบหลักฐานการโอน</label>
                                                          <input type="file" class="form-control mb-2" id="paymentReceipt">
                                                          <div class="preview-container">
                                                              <img id="preview1" src="" alt="Preview 1" style="display: none; width:30%">
                                                          </div>
                                                      </div>
                                                  </div>
                                      
                                                  <div class="col-sm-11 mt-2">
                                                      <b id="totalpayfull">ยอดชำระเงินทั้งหมด&nbsp; <span class="total-price"></span> 4,000 &nbsp;บาท</b>
                                                      <b id="totalsplit" style="display: none">ยอดชำระเงินทั้งหมด&nbsp; <span class="total-price_2">0</span> &nbsp;บาท</b>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <script>
                                          function togglePaymentFields() {
                                              const paymentChannel = document.querySelector('input[name="payment_channel"]:checked').value;
                                              const paymentDetails = document.getElementById('paymentDetails');
                                              const paymentDetails2 = document.getElementById('paymentDetails2');
                                              
                                              // หากเลือก โอนเงิน (value=2) ให้แสดงฟอร์มเพิ่ม
                                              if (paymentChannel == '2') {
                                                  paymentDetails.style.display = 'block';
                                                  paymentDetails2.style.display = 'none';
                                              } else {
                                                  paymentDetails.style.display = 'none';
                                                  paymentDetails2.style.display = 'block';
                                              }
                                          }
                                          function handleFileInput(fileInputId, previewId) {
                                              const fileInput = document.getElementById(fileInputId);
                                              const previewImage = document.getElementById(previewId);
                      
                                              fileInput.addEventListener('change', function () {
                                                  const file = fileInput.files[0];
                      
                                                  if (file) {
                                                      const reader = new FileReader();
                      
                                                      reader.onload = function (e) {
                                                          previewImage.src = e.target.result;
                                                          previewImage.style.display = 'block';  // แสดงภาพพรีวิว
                                                      };
                      
                                                      reader.readAsDataURL(file);
                                                  } else {
                                                      previewImage.style.display = 'none'; // ซ่อนพรีวิวถ้าไม่ได้เลือกไฟล์
                                                  }
                                              });
                                          }
                                      
                                          handleFileInput('paymentReceipt', 'preview1');
                                          // เรียกใช้ฟังก์ชั่นเริ่มต้นเมื่อเพจโหลด
                                          togglePaymentFields();
                                      </script>
                                      
                                        
                                        <div class="modal-footer rounded-0 justify-content-center">
                                            {{-- <button type="button" class="btn btn-label-secondary" data-bs-dismiss="modal">ยกเลิก</button> --}}
                                            <button class="btn btn-info" type="submit">
                                              <span>
                                              <i class="ti-md ti ti-report-money"></i>
                                              <b class="dam">
                                                ชำระ
                                              </b>
                                            </span></button>
                                        </div>
                                    {{-- </form> --}}
                                </div>
                                <form method="POST" action="/deduct-from-deposit" class="p-4 rounded" id="pay2" style="display: none;">
                                    <!-- หัวเรื่อง -->
                                    <h5 class="mb-3">บิลค้างชำระ</h5>
                                <hr>
                                    <!-- รายละเอียด -->
                                    <p><strong>เคลียร์บิลค้างชำระด้วยการนำไปหักจากเงินประกัน</strong></p>
                                    <div style="display: flex; justify-content: space-between;">
                                        <p>บิลค่าเช่าห้องเดือน 3/2025</p>
                                        <p class="text-danger">ค้างชำระ: 4,702 บาท</p>
                                    </div>
                                      
                                
                                    <!-- วันที่หักเงิน -->
                                    <div class="mb-3">
                                        <label for="deduct_date" class="form-label" style="font-size: medium;"><strong>วันที่หักเงินประกัน</strong></label>
                                        <input type="text" id="deduct_date" name="deduct_date" class="form-control" value="21/04/2025" readonly>
                                    </div>
                                
                                    <!-- ปุ่ม -->
                                    <div class="d-flex justify-content-end">
                                        <a href="#" class="btn btn-outline-secondary me-2">ยกเลิก</a>
                                        <button type="submit" class="btn btn-success">ตกลง</button>
                                    </div>
                                </form>
                            </div>
                                <div class="my-5 p-2 text-white" style="background-color: rgb(255, 73, 73);" align="center">
                                    ยอดค้างชำระ {{ number_format(4000) }}
                                </div>

                                {{-- /////////////////////////////// --}}

                                <label class="mb-0 text-black" style="font-weight: 500;font-size: large;" for="">
                                    <span class="badge badge-center rounded-pill bg-primary me-1" style="background-color: #54BAB9 !important;">2</span>
                                    รายการทรัพย์สิน (รับห้อง)
                                </label>
                                <style>
                                    .table-detail {
                                        border-collapse: collapse; /* รวมเส้นขอบของตาราง */
                                        /* border-radius: 10px; */
                                    }
                                    .table-detail th, .table-detail td {
                                        border: 1px solid #d9d9d9 !important; /* กำหนดเส้นขอบของ th และ td */
                                    }
                                    .table-detail th {
                                        vertical-align: middle;
                                        font-weight: 500;
                                        font-size: 14px;
                                        color: black !important;
                                    }
                                </style>
                                <table class="table table-bordered mt-4 table-detail">
                                    <thead>
                                        <tr>
                                            <th class="text-center">รายการ</th>
                                            <th class="text-center">
                                                สถานะทรัพย์สิน
                                            </th>
                                            <th class="text-center">
                                                ค่าปรับ
                                            </th>
                                            <th class="text-center">
                                                รูปภาพก่อนเข้าพัก
                                            </th>
                                            <th class="text-center">
                                                รูปภาพก่อนย้ายออก
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-center">
                                            <td>
                                                โทรทัศน์
                                            </td>
                                            <td>
                                                <input name="radio1" class="form-check-input" type="radio" id="notDamaged" checked>
                                                <label class="form-check-label" for="notDamaged"> ไม่เสียหาย </label>
                                                <input name="radio1" class="form-check-input" type="radio" id="damaged"> 
                                                <label class="form-check-label" for="damaged"> เสียหาย </label>
                                            </td>
                                            <td>
                                                <span >{{ number_format(1000) }}</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-xs btn-label-secondary waves-effect text-black px-2"><i class="ti ti-photo me-1"></i> ภาพก่อนเข้าพัก</button>
                                            </td>
                                            <td>
                                                <button class="btn btn-xs btn-label-info waves-effect text-black px-2"><i class="ti ti-photo me-1"></i> อัพโหลดหลักฐาน</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                               
                                  
                                {{-- /////////////////////////////// --}}
                                
                                <label class="mt-4 text-black" style="font-weight: 500;font-size: large;" for="">
                                    <span class="badge badge-center rounded-pill bg-primary me-1" style="background-color: #54BAB9 !important;">3</span>
                                    ใบเสร็จย้ายออก
                                </label>
                                <div class="row g-2 pt-1">
                                    <div class="p-2">
                                        <label class="mb-1 text-black"><i class="ti ti-license text-main mb-1"></i> รายละเอียดหัวบิล</label>
                                            <select name="ref_renter_id" id="select2RenterDetail" class="select2 form-select form-select-lg" onchange="get_room_rental_contract(this.value)" required>
                                                <option selected disabled hidden value="no">เลือกข้อมูลจากผู้เช่า</option>
                                                @foreach ($renter as $rent)
                                                    <option value="{{ $rent->id }}">{{ $rent->prefix.' '.$rent->name.' '.$rent->surname }}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlInput1" class="form-label">ชื่อผู้เข้าพัก</label>
                                        <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="" value="" />
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlInput2" class="form-label">ที่อยู่ผู้เข้าพัก</label>
                                        <input type="text" name="homeland" class="form-control" id="exampleFormControlInput2" placeholder="" value="" />
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlInput3" class="form-label">เบอร์โทรผู้เข้าพัก</label>
                                        <input type="text" name="phone" class="form-control" id="exampleFormControlInput3" placeholder="" value="" />
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="exampleFormControlInput4" class="form-label">หมายเลขบัตรประชาชนผู้เข้าพัก</label>
                                        <input type="text" name="id_card_number" class="form-control" id="exampleFormControlInput4" placeholder="" value="" />
                                    </div>
                                    <div class="col-sm-12">
                                        <label for="" class="form-label">หมายเหตุ</label>
                                        <textarea name="remark" class="form-control"></textarea>
                                    </div>
                                </div>
                                
                                <table class="table table-bordered mt-4 table-detail">
                                    <thead>
                                        <tr>
                                            <th width="70%">รายการ</th>
                                            <th>
                                                จำนวนเงิน(บาท)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                ค่าเช่าห้อง
                                            </td>
                                            <td>
                                                0
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                รวมทั้งหมด
                                            </th>
                                            <th>
                                                0
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="mt-4 text-end col-12">
                                    <button
                                            id="add_discount"
                                            style="padding-right: 14px;padding-left: 14px;"
                                            class="btn btn-sm buttons-collection btn-info waves-effect waves-light me-2"
                                            tabindex="0" aria-controls="DataTables_Table_0"
                                            type="button" aria-haspopup="dialog"
                                            aria-expanded="false">
                                        <span>
                                        <i class="ti ti-plus"></i> ค่าน้ำ-ค่าไฟฟ้าสุดท้าย</span>
                                    </button>
                                    <button
                                            id="add_discount"
                                            style="padding-right: 14px;padding-left: 14px;"
                                            class="btn btn-sm buttons-collection btn-danger waves-effect waves-light me-2"
                                            tabindex="0" aria-controls="DataTables_Table_0"
                                            type="button" aria-haspopup="dialog"
                                            aria-expanded="false">
                                        <span>
                                        <i class="ti ti-plus"></i> เพิ่มส่วนลด</span>
                                    </button>
                                    <button
                                            id="add_expenses"
                                            style="padding-right: 14px;padding-left: 14px;"
                                            class="btn btn-sm buttons-collection btn-warning waves-effect waves-light me-2"
                                            tabindex="0" aria-controls="DataTables_Table_0"
                                            type="button" aria-haspopup="dialog"
                                            aria-expanded="false">
                                        <span>
                                        <i class="ti ti-plus"></i> เพิ่มรายการ</span>
                                    </button>
                                </div>

                                {{-- /////////////////////////////// --}}

                                <label class="mt-4 text-black" style="font-weight: 500;font-size: large;" for="">
                                    <span class="badge badge-center rounded-pill bg-primary me-1" style="background-color: #54BAB9 !important;">3</span>
                                    เงินประกัน
                                </label>
                                
                                <table class="table table-bordered mt-4 table-detail">
                                    <thead>
                                        <tr>
                                            <th width="70%">รายการ</th>
                                            <th>
                                                จำนวนเงิน(บาท)
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                เงินประกันห้อง
                                            </td>
                                            <td>
                                                <input class="form-control" type="text" disabled value="{{ number_format(1000) }}">
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                รวมรายการ
                                            </th>
                                            <th>
                                                0
                                            </th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="mt-4 text-end col-12">
                                    <button
                                            id="add_expenses"
                                            style="padding-right: 14px;padding-left: 14px;"
                                            class="btn btn-sm buttons-collection btn-warning waves-effect waves-light me-2"
                                            tabindex="0" aria-controls="DataTables_Table_0"
                                            type="button" aria-haspopup="dialog"
                                            aria-expanded="false">
                                        <span>
                                        <i class="ti ti-plus"></i> เพิ่มรายการเงินประกัน</span>
                                    </button>
                                </div>
                                {{-- /////////////////////////////// --}}
                                <div class="text-center">
                                    <span class="badge bg-label-success text-black mt-5" style="width: 100%;font-size: larger;">
                                        สรุปการย้ายออก
                                    </span>
                                    <h4 class="text-success mt-2">เงินจากการหักเงินประกัน 0 บาท</h4>
                                    
                                    <table class="table table-bordered mt-4 table-detail" style="width: 60%;margin: auto;">
                                        <thead>
                                        <tr class="text-start">
                                            <th>วันที่ย้ายออก</th>
                                            <th style="color: red !important;">
                                                25/06/2024
                                            </th>
                                        </tr>
                                        </thead>
                                    </table>
                                </div>
                                {{-- /////////////////////////////// --}}
                                <div class="modal-footer rounded-0 justify-content-start mb-0">
                                    <button type="button" class="btn btn-label-primary waves-effect text-black"><span
                                            class="ti-md ti ti-printer me-2"></span>พิมพ์ใบย้ายออก
                                    </button>
                                    <button type="submit" class="btn btn-main waves-effect ms-auto" onclick="paymentChannel(1)">
                                        บันทึกยอดเงินทั้งหมดแล้วย้ายออก
                                    </button>
                                </div>
                                {{-- /////////////////////////////// --}}

                            </div>
                        </div>
                    </div>
                </div>
                
        </div>
        
    </div>
      
<script>
    function editAssetModal(){
            var myModal = new bootstrap.Modal(document.getElementById('editAssetModal'));
                myModal.show();
        }
    // get_bill()
    function get_bill(month){
        $.ajax({
            type: "GET",
            url: "{{ $page_url }}/get-bill/{{$room->id}}/"+month,
            success: function(data) {
                $("#bill").html(data);
            }
        });
    }
    $('#edit_user').on('submit', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มปกติ
            if(!this.checkValidity()) {
                // ถ้าฟอร์มไม่ถูกต้อง
                this.reportValidity();
                return console.log('ฟอร์มไม่ถูกต้อง');
            }
            // return alert(123);
            Swal.fire({
                title: 'ยืนยันการดำเนินการ?',
                text: 'คุณต้องการ แก้ไข พนักงาน หรือไม่?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ตกลง',
                cancelButtonText: 'ยกเลิก',
                showDenyButton: false,
            didOpen: () => {
                // โฟกัสที่ปุ่ม confirm
                Swal.getConfirmButton().focus();
            }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '{{$page_url}}/{{$room->id}}', // เปลี่ยน URL เป็นจุดหมายที่ต้องการ
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                            if(response == true){
                                Swal.fire('แก้ไขพนักงานเรียบร้อยแล้ว', '', 'success');
                                loadData(page);
                                view('{{$room->id}}');
                            }
                        },
                        error: function(error) {
                            Swal.fire('เกิดข้อผิดพลาด', '', 'error');
                            console.error('เกิดข้อผิดพลาด:', error);
                        }
                    });
                } else if (result.isDismissed) {
                    // Swal.fire('ยกเลิกการดำเนินการ', '', 'info');
                }
            });
        });
        $('#formAssetModal').on('submit', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มปกติ

            if (!this.checkValidity()) {
                this.reportValidity();
                return console.log('ฟอร์มไม่ถูกต้อง');
            }

            Swal.fire({
                title: 'ยืนยันการดำเนินการ?',
                text: 'คุณต้องการ แก้ไข ทรัพย์สิน หรือไม่?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ตกลง',
                cancelButtonText: 'ยกเลิก',
                showDenyButton: false,
                didOpen: () => {
                    Swal.getConfirmButton().focus();
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // ใช้ FormData แทน serialize เพื่อส่งไฟล์ได้
                    let form = document.getElementById('formAssetModal');
                    let formData = new FormData(form);
                    formData.append('_token', '{{ csrf_token() }}'); // สำหรับ Laravel CSRF

                    $.ajax({
                        url: '{{$page_url}}/asset/update_asset',
                        type: 'POST',
                        data: formData,
                        contentType: false, // ต้องมีเพื่อให้ส่ง multipart/form-data ได้
                        processData: false,
                        success: function(response) {
                            if (response == true) {
                                var modalEl = document.getElementById('editAssetModal');
                                var modalInstance = bootstrap.Modal.getInstance(modalEl); // <-- ดึง instance ที่เปิดอยู่
                                if (modalInstance) {
                                    modalInstance.hide(); // <-- ซ่อน modal ที่เปิดอยู่จริง
                                }
                                loadData(page);
                                view('{{$room->id}}');
                                Swal.fire('แก้ไข ทรัพย์สิน เรียบร้อยแล้ว', '', 'success').then((result) => {
                                    if (result.isConfirmed) {
                                        // สั่งให้เปิด Tap รายการทรัพย์สิน
                                        const targetTab = document.querySelector('button[data-bs-target="#navs-pills-top-assets"]');
                                        if (targetTab) {
                                            const tab = new bootstrap.Tab(targetTab);
                                            tab.show();
                                        }
                                    }
                                });

                            }
                        },
                        error: function(error) {
                            Swal.fire('เกิดข้อผิดพลาด', '', 'error');
                            console.error('เกิดข้อผิดพลาด:', error);
                        }
                    });
                }
            });
        });

    $('#change_room_btn').on('click', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มปกติ
            if(!this.checkValidity()) {
                // ถ้าฟอร์มไม่ถูกต้อง
                this.reportValidity();
                return console.log('ฟอร์มไม่ถูกต้อง');
            }
            var room_name = $("#change_room option:selected").text();
            Swal.fire({
                title: 'ยืนยันการดำเนินการ?',
                html: 'คุณต้องการย้ายไปห้อง &nbsp;<span class="text-success">'+room_name+'</span> &nbsp;หรือไม่?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ตกลง',
                cancelButtonText: 'ยกเลิก',
                showDenyButton: false,
                didOpen: () => {
                    // โฟกัสที่ปุ่ม confirm
                    Swal.getConfirmButton().focus();
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/room/change_room/{{$room->id}}/'+$("#change_room").val(), // เปลี่ยน URL เป็นจุดหมายที่ต้องการ
                        type: 'POST',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if(response == true){
                                loadData(page);
                                Swal.fire('ย้ายห้องเรียบร้อยแล้ว', '', 'success')
                                // $('#room-rental-contract').html('');
                            }
                        },
                        error: function(error) {
                            Swal.fire('เกิดข้อผิดพลาด', '', 'error');
                            console.error('เกิดข้อผิดพลาด:', error);
                        }
                    });
                } else if (result.isDismissed) {
                    // Swal.fire('ยกเลิกการดำเนินการ', '', 'info');
                }
            });
        });
        $('#period, #contract_date').on('input', function() {
            var contractDate = $('#contract_date').val();
            var period = $('#period').val();

            // ตรวจสอบว่า contractDate และ period มีค่าหรือไม่
            if (contractDate && period && !isNaN(period)) {
                var dateParts = contractDate.split('/');
                var day = dateParts[0];
                var month = dateParts[1];
                var year = dateParts[2];

                // สร้างวันในรูปแบบปี, เดือน, วัน
                var date = new Date(year, month - 1, day);

                // เพิ่มเดือนตาม period ที่ใส่
                date.setMonth(date.getMonth() + parseInt(period));

                // แปลงวันที่กลับเป็นรูปแบบ day/month/year
                var newDate = ('0' + date.getDate()).slice(-2) + '/' + ('0' + (date.getMonth() + 1)).slice(-2) + '/' + date.getFullYear();

                // ใส่วันที่ที่คำนวณในฟิลด์ contract_date_to
                $('#contract_date_to').val(newDate);
            }
        });
        $('#form_contract').on('submit', function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มปกติ
            
            if(!this.checkValidity()) {
                // ถ้าฟอร์มไม่ถูกต้อง
                this.reportValidity();
                return console.log('ฟอร์มไม่ถูกต้อง');
            }

            let url = "/room/insert_contract";
            
            if("{{$room->status}}" == 2 ){   // ถ้าทำสัญญาแล้ว ให้เรียกใช้ funtion get_contract()
                
                url = "/room/update_contract/{{ @$contract->id }}";
                
            }
            Swal.fire({
                title: 'ยืนยันการดำเนินการ?',
                text: 'คุณต้องการเพิ่ม สัญญา หรือไม่?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'ตกลง',
                cancelButtonText: 'ยกเลิก',
                showDenyButton: false,
                didOpen: () => {
                    // โฟกัสที่ปุ่ม confirm
                    Swal.getConfirmButton().focus();
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url, // เปลี่ยน URL เป็นจุดหมายที่ต้องการ
                        type: 'POST',
                        data: $(this).serialize(),
                        success: function(response) {
                            if("{{$room->status}}" != 2 ){   // ถ้าทำสัญญาแล้ว ให้เรียกใช้ funtion get_contract()
                                openDe(response.rent_bill_id,response.contract_id);
                            }
                            // $('#form_contract')[0].reset();
                            loadData(page);
                            summary();
                            Swal.fire('เพิ่มสัญญาเรียบร้อยแล้ว', '', 'success').then((result) => {
                                // location.reload();
                                get_contract();

                            });
                                
                                // $('#room-rental-contract').html('');
                            // }
                        },
                        error: function(error) {
                            Swal.fire('เกิดข้อผิดพลาด', '', 'error');
                            console.error('เกิดข้อผิดพลาด:', error);
                        }
                    });
                } else if (result.isDismissed) {
                    // Swal.fire('ยกเลิกการดำเนินการ', '', 'info');
                }
            });
        });
        function change_room(){
            $('#change_room_btn').prop('disabled', false);
        }
        $(document).ready(function() {
            $('#change_room').select2({
                placeholder: 'เลือกห้อง',
                dropdownParent: $('#insurance'),
                allowClear: true
            });
        });
        $('#bs-datepicker-format2').datepicker({
            format: 'dd/mm/yyyy', // กำหนดรูปแบบวันที่
            autoclose: true,      // ปิด datepicker เมื่อเลือกวันที่
            todayHighlight: true  // ไฮไลต์วันที่ปัจจุบัน
        });
        $('#bs-datepicker-basic').datepicker({
            format: 'mm/dd/yyyy', // Set the date format
            autoclose: true        // Close the datepicker when a date is selected
        });
        $('#select2month').select2();
        // $('#select2RenterDetail').select2();
        $('#select2RenterContract').select2();
        $('#select2RenterContract2').select2();

</script>