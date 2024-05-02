<?php
$html = ' <div class="DELETABLETIMESLOT mt-1">
    <select name="startHH[]" id="" style="appearance: none; border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
        <option selected disabled value="">HH</option>';
for ($i = 0; $i <= 23; $i++) {
    $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
    $html .= "<option value=\"$hour\">$hour</option>";
}
$html .= '</select>
    :
    <select name="startMM[]" id="" style="appearance: none; border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
        <option selected disabled value="">MM</option>';
for ($i = 0; $i <= 59; $i++) {
    $minute = sprintf("%02d", $i); // Format the number with leading zero if needed
    $html .= "<option value=\"$minute\">$minute</option>";
}
$html .= '</select>
    -
    <select name="endHH[]" id="" style="appearance: none; border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
        <option selected disabled value="">HH</option>';
for ($i = 0; $i <= 23; $i++) {
    $hour = sprintf("%02d", $i); // Format the number with leading zero if needed
    $html .= "<option value=\"$hour\">$hour</option>";
}
$html .= '</select>
    :
    <select name="endMM[]" id="" style="appearance: none; border: 1px solid #ced4da; border-radius: 4px; padding: 6px 12px; font-size: 14px;" required>
        <option selected disabled value="">MM</option>';
for ($i = 0; $i <= 59; $i++) {
    $minute = sprintf("%02d", $i); // Format the number with leading zero if needed
    $html .= "<option value=\"$minute\">$minute</option>";
}
$html .= '</select> <button type="button" class="remove-btn btn btn-danger">-</button> </div>';
echo $html;
?>
