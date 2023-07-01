<table id="leads_table" class="display" style="width:100%">
    <thead>
        <tr>
            <th></th>
            <th>Subject All</th>
            <th>Due Date</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Related to</th>
            <th>Contact Name</th>
            <th>Task Owner</th>
        </tr>
    </thead>
    <tbody>
        <tr>

            <td></td>
            <td class="d-flex " style="height:100px; ">
                <div class="me-2">
                    <img style="height:85px; width:auto;" src="https://crm.zoho.com/crm/org806631444/EntityImageAttach.do?action_module=Leads&entityId=5698258000000419408&actionName=readImage&encfileId=ca2527ee3c96e466365bb1d7b963ebc87f05ed569822c6cbee29cccdf74bcd50ad7ed1e2bd4c53d8ef278a348991b068a0f7bc76c9c2d91006652c0e2c6f41ce5fe17fd5afa53538c6110ed66c7a1f06" alt="">
                </div>
                <div>
                    <a href="{{url('/edit_table_data')}}"><i class="fas fa-pen me-2"></i></a>
                    Complete CRM Getting to Step
                </div>
            </td>
            <td>02/01/2023</td>
            <td>Completed</td>
            <td> Highest</td>
            <td>Benton</td>

            <td>John Butt (Sample)</td>
            <td>batman020120130114</td>
        </tr>
        <tr>
            <td></td>
            <td class="d-flex " style="height:100px; ">
                <div class="me-2">
                    <img style="height:85px; width:auto;" src="https://crm.zoho.com/crm/org806631444/EntityImageAttach.do?action_module=Leads&entityId=5698258000000419408&actionName=readImage&encfileId=ca2527ee3c96e466365bb1d7b963ebc87f05ed569822c6cbee29cccdf74bcd50ad7ed1e2bd4c53d8ef278a348991b068a0f7bc76c9c2d91006652c0e2c6f41ce5fe17fd5afa53538c6110ed66c7a1f06" alt="">
                </div>
                <div>
                    <a href="{{url('/edit_table_data')}}"><i class="fas fa-pen me-2"></i></a>
                    Complete CRM Getting to Step
                </div>
            </td>
            <td>02/01/2023</td>
            <td>Completed</td>
            <td> Highest</td>
            <td>Benton</td>

            <td>John Butt (Sample)</td>
            <td>batman020120130114</td>
        </tr>
        <tr>
            <td></td>
            <td class="d-flex " style="height:100px; ">
                <div class="me-2">
                    <img style="height:85px; width:auto;" src="https://crm.zoho.com/crm/org806631444/EntityImageAttach.do?action_module=Leads&entityId=5698258000000419408&actionName=readImage&encfileId=ca2527ee3c96e466365bb1d7b963ebc87f05ed569822c6cbee29cccdf74bcd50ad7ed1e2bd4c53d8ef278a348991b068a0f7bc76c9c2d91006652c0e2c6f41ce5fe17fd5afa53538c6110ed66c7a1f06" alt="">
                </div>
                <div>
                    <a href="{{url('/edit_table_data')}}"><i class="fas fa-pen me-2"></i></a>
                    Complete CRM Getting to Step
                </div>
            </td>
            <td>02/01/2023</td>
            <td>Completed</td>
            <td> Highest</td>
            <td>Benton</td>

            <td>John Butt (Sample)</td>
            <td>batman020120130114</td>
        </tr>

    </tbody>
    <!-- <tfoot>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
        </tr>
    </tfoot> -->
</table>

<script>
    $(document).ready(function() {
        $('#leads_table').DataTable({
            'dom': 'Bfrtip',
            'buttons': [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            'columnDefs': [{
                'targets': 0,
                'checkboxes': {
                    'selectRow': true
                }
            }],
            'select': {
                'style': 'multi'
            },
            'order': [
                [1, 'asc']
            ]
        });
    });
</script>