<?php
defined('BASEPATH') or exit('No direct script access allowed');

$now = gmdate("D-d-M-Y-H:i:s");
header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=journals-{$now}.csv");
?>
<?= lang('journals') . ", scielo_url, " . strtolower(lang('publisher')) . ", status\n" ?>
<?php foreach ($journals as $journal) : ?>
<?= '"' . $journal->title . '", "' . $journal->scielo_url . '", "' . $journal->publisher_name . '", "' . $journal->status . "\"\n" ?>
<?php endforeach; ?>
