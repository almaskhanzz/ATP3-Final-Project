$("#btnPrint").on("click", function () {
    var printWindow = window.open('', '', '');
    printWindow.document.write( '<html><head><title>Monthly Report</title>');
    printWindow.document.write('<style>td,th{padding: 5px 10px 5px 5px;}</style>');
    printWindow.document.write('</head><body >');
    printWindow.document.write('<table border="1" style="border-collapse:collapse;text-align:center;" align="center">');

    printWindow.document.write('<tr><td colspan="2"><h3>Monthly Operations Report<h3></td></tr>');
    printWindow.document.write('<tr><td colspan="2"><h5><strong>Hospital</strong> Management System<h5></td></tr>');

    printWindow.document.write('<tr><th>Overall Status/ Key Performance Indicator</th><th>Status</th></tr>');
    printWindow.document.write('<tr><td>Doctors</td><td>'+$("#doctors").val()+'</td></tr>');
    printWindow.document.write('<tr><td>staffs</td><td>'+$("#staffs").val()+'</td></tr>');
    printWindow.document.write('<tr><td>Users</td><td>'+$("#users").val()+'</td></tr>');

    printWindow.document.write('<tr><td colspan="2">Hospital Management reserves the right to change the total count of Doctors, Staffs and Users. Thank you.</td></tr>');

    printWindow.document.write('</table>');


    printWindow.document.write('<br><br><br><br><br>');

    printWindow.document.write('<div style="float:right;border-top:1px solid black;"> Signature </div>');

    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.print();
});