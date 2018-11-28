<?php

require_once __DIR__ .  '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$html = "<h1>Hello world!</h1>";

$html = $html .  "

    <table>
        <thead>
            <tr>
                <th>head1</th>
                <th>head2</th>
                <th>head3</th>
                <th>head4</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>foot1</td>
                <td>foot2</td>
                <td>foot3</td>
                <td>foot4</td>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>cell1_1</td>
                <td>cell2_1</td>
                <td>cell3_1</td>
                <td>cell4_1</td>
            </tr>
    </table>

";

$mpdf->WriteHTML($html);
$mpdf->Output();