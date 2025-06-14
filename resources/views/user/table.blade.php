    {{-- {{dd($list_data['to'])}} --}}
    <table class="datatables-basic table dataTable no-footer dtr-column" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">
        <thead class="border-top">
            <tr class=" table-info">
                <th class="text-center" tabindex="0" style="width: 40px;">
                    ลำดับ
                </th>
                <th class="text-center">
                    ชื่อพนักงาน
                </th>
                <th class="text-center">
                    เงินเดือน</th>
                <th class="text-center">
                    เบอร์</th>
                <th class="text-center">
                    อีเมล
                </th>
                <th class="text-center">
                    วันที่เข้าทำงาน
                </th>
                <th class="text-center">
                    ตำแหน่ง
                </th>
                <th class="text-center">
                    หมายเหตุ
                </th>
                <th class="text-center">
                    ดำเนินการ
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($list_data as $key => $row)
            <tr class="odd"
                @if ($row->user_has_branch->ref_position_id == 1)
                    style="background-color: #d2ffd2;"
                @else
                    style="background-color: #fefced;"
                @endif
                
                >
                <td class="text-center" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#insurance" onclick="view({{ $row->id }})">
                    {{ $list_data->firstItem()+$key }}
                </td>
                <td class="text-center" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#insurance" onclick="view({{ $row->id }})">
                    {{ $row->name }}
                </td>
                <td class="text-center" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#insurance" onclick="view({{ $row->id }})">
                    {{ number_format($row->salary) }}
                </td>
                <td class="text-center" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#insurance" onclick="view({{ $row->id }})">
                    {{ $row->phone }}
                </td>
                <td class="text-center" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#insurance" onclick="view({{ $row->id }})">
                    {{ $row->email }}
                </td>
                <td class="text-center" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#insurance" onclick="view({{ $row->id }})">
                    {{ date('d/m/Y', strtotime($row->work_start_date)) }}
                </td>
                <td class="text-center">
                    @if ($row->id == Auth::id())
                        {{ $row->user_has_branch->position->position_name }}
                    @else
                        <select name="ref_position_id" class="select2 form-select form-select-lg select2Position2" onchange="change_position(this.value, {{ $row->user_has_branch->id }})">
                            @foreach ($position as $pos)
                                <option @if ($row->user_has_branch->ref_position_id == $pos->id)
                                    selected
                                @endif value="{{$pos->id}}">{{$pos->position_name}}</option>
                            @endforeach
                        </select>
                    @endif
                </td>
                <td class="text-center" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#insurance" onclick="view({{ $row->id }})">
                    {{ $row->remark }}
                </td>
                <td class="table-report__action text-center" style="font-size: 12px;">
                    <div class="flex justify-center items-center">
                        <a class="flex items-center text-danger" href="javascript:;" onclick='Delete({{$row->user_has_branch->id}})'>
                            <i class="fa fa-trash" aria-hidden="true"></i>&nbsp; ลบ
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<!-- END: Data List -->
<!-- BEGIN: Pagination -->
@include('layout/pagination')