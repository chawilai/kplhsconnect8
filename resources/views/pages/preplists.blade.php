@extends('layouts.main')

@section('topName')
PrEP Lists
@endsection

@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">รายการ PrEP</h4>
            </div>
            <div class="card-body">
              <div class="toolbar">
                <!--        Here you can write extra buttons/actions for the toolbar              -->
              </div>
              <table id="datatable" class="table table-striped table-bordered text-center" cellspacing="0" width="100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>CBO</th>
                    <th>PrEP_Code</th>
                    <th>VN</th>
                    <th>UIC</th>
                    <th>Name</th>
                    <th>id_card</th>
                    <th>PrEP Visit</th>
                    <th>Files</th>
                    <th>Status</th>
                    <th class="disabled-sorting">Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>CBO</th>
                    <th>PrEP_Code</th>
                    <th>VN</th>
                    <th>UIC</th>
                    <th>Name</th>
                    <th>id_card</th>
                    <th>PrEP Visit</th>
                    <th>Files</th>
                    <th>Status</th>
                    <th class="disabled-sorting">Action</th>
                  </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><span class="badge badge-pill badge-danger">Mplus</span></td>
                        <td>NKP0002</td>
                        <td>VN00001</td>
                        <td>กก010101</td>
                        <td>เกรียงไกร กิ่งทอง</td>
                        <td>2500355456805</td>
                        <td>Month 0</td>
                        <td><a target="_blank" href="print" class="btn btn-info btn-link btn-icon btn-sm"><i class="fa fa-file-archive-o"></i></a></td>
                        <td><span class="badge badge-warning">รอออก OPD</span></td>
                        <td class="disabled-sorting"><a target="_blank" href="signature" class="btn btn-sm btn-info">เซ็นชื่อ</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><span class="badge badge-pill badge-danger">Mplus</span></td>
                        <td>NKP0033</td>
                        <td>VN00002</td>
                        <td>ขข020202</td>
                        <td>ขจร ขจี</td>
                        <td>1500900003233</td>
                        <td>Month 6</td>
                        <td><a target="_blank" href="print" class="btn btn-info btn-link btn-icon btn-sm"><i class="fa fa-file-archive-o"></i></a></td>
                        <td><span class="badge badge-success">รอแพทย์อนุมัติยา</span></td>
                        <td class="disabled-sorting"><a target="_blank" href="signature" class="btn btn-sm btn-info">เซ็นชื่อ</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><span class="badge badge-pill badge-danger">Mplus</span></td>
                        <td>NKP0047</td>
                        <td>VN00003</td>
                        <td>คค030303</td>
                        <td>คิดดี ดิดได้</td>
                        <td>1900333505684</td>
                        <td>Month 0</td>
                        <td><a target="_blank" href="print" class="btn btn-info btn-link btn-icon btn-sm"><i class="fa fa-file-archive-o"></i></a></td>
                        <td><span class="badge badge-warning">รอออก OPD</span></td>
                        <td class="disabled-sorting"><a target="_blank" href="signature" class="btn btn-sm btn-info">เซ็นชื่อ</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><span class="badge badge-pill badge-primary">CAREMAT</span></td>
                        <td>CM0025</td>
                        <td>VN00004</td>
                        <td>งง040404</td>
                        <td>งามแท้ เงางาม</td>
                        <td>1900333505684</td>
                        <td>Month 3</td>
                        <td><a target="_blank" href="print" class="btn btn-info btn-link btn-icon btn-sm"><i class="fa fa-file-archive-o"></i></a></td>
                        <td><span class="badge badge-success">รอแพทย์อนุมัติยา</span></td>
                        <td class="disabled-sorting"><a target="_blank" href="signature" class="btn btn-sm btn-info">เซ็นชื่อ</a></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><span class="badge badge-pill badge-danger">Mplus</span></td>
                        <td>NKP0103</td>
                        <td>VN00005</td>
                        <td>จจ050505</td>
                        <td>จอมขวัญ จอมนาง</td>
                        <td>1900333505684</td>
                        <td>Month 0</td>
                        <td><a target="_blank" href="print" class="btn btn-info btn-link btn-icon btn-sm"><i class="fa fa-file-archive-o"></i></a></td>
                        <td><span class="badge badge-warning">รอออก OPD</span></td>
                        <td class="disabled-sorting"><a target="_blank" href="signature" class="btn btn-sm btn-info">เซ็นชื่อ</a></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><span class="badge badge-pill badge-primary">CAREMAT</span></td>
                        <td>CM0237</td>
                        <td>VN00006</td>
                        <td>บบ060606</td>
                        <td>ใบบุญ บ้านไกล</td>
                        <td>1900333505684</td>
                        <td>Month 12</td>
                        <td><a target="_blank" href="print" class="btn btn-info btn-link btn-icon btn-sm"><i class="fa fa-file-archive-o"></i></a></td>
                        <td><span class="badge badge-success">รอแพทย์อนุมัติยา</span></td>
                        <td class="disabled-sorting"><a target="_blank" href="signature" class="btn btn-sm btn-info">เซ็นชื่อ</a></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><span class="badge badge-pill badge-primary">CAREMAT</span></td>
                        <td>CM0247</td>
                        <td>VN00007</td>
                        <td>สส070707</td>
                        <td>เสาหลัก สูงส่ง</td>
                        <td>1351242500034</td>
                        <td>Month 36</td>
                        <td><a target="_blank" href="print" class="btn btn-info btn-link btn-icon btn-sm"><i class="fa fa-file-archive-o"></i></a></td>
                        <td><span class="badge badge-info">รอบันทึกผล Lab</span></td>
                        <td class="disabled-sorting"><a target="_blank" href="signature" class="btn btn-sm btn-info">เซ็นชื่อ</a></td>
                    </tr>
                </tbody>
              </table>
            </div><!-- end content-->
          </div><!--  end card  -->
        </div> <!-- end col-md-12 -->
      </div> <!-- end row -->
</div>
@endsection

@section('script')
    <script>
        $('#datatable').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }

      });

      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');

        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });
    </script>
@endsection
