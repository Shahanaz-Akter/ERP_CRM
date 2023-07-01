<table id="contact_add_product_table" class="display" style="width:100%">
    <thead>
        <tr>
            <th></th>
            <th>Product Name</th>
            <th>Product Code</th>
            <th>Vendor Name</th>
            <th>Unit Price</th>
            <th>Tax</th>
            <th>Taxable</th>
        </tr>
    </thead>
    <tbody class="">
        <tr>
            <td></td>
            <td>Jennifer contact</td>
            <td>Junior Javascript Developer</td>
            <td>Edinburgh</td>
            <td>43</td>
            <td>$75,650</td>
            <td>$75,650</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th>Name</th>
            <th>Position</th>
            <th>Office</th>
            <th>Age</th>
            <th>Salary</th>
            <th>Salary</th>
        </tr>
    </tfoot>
</table>

<script>
    $(document).ready(function() {
        $('#contact_add_product_table').DataTable({
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