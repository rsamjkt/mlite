<?php
if(!defined('IS_IN_MODULE')) { die("NO DIRECT FILE ACCESS!"); }

$module_directory = 'RawatJalan';
$module_title = 'Rawat Jalan';
$module_author = 'Ataaka Salim';
$module_url = 'https://khanza.basoro.id';
$module_description = 'Modul rawat jalan yang berisi isian pemeriksaan, tindakan, upload berkas digital, berkas radiologi dan set status perawatan pasien.';

?>

<?php if(FKTL == 'YES') { ?>
    <?php if(basename($_SERVER['SCRIPT_NAME']) == 'index.php') { ?>
      <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
        <a href="<?php echo URL; ?>/?module=RawatJalan&page=index">
          <div class="image">
            <div class="icon">
              <i class="medical-icon-i-outpatient"></i>
            </div>
          </div>
          <div class="sname"><?php echo $module_title; ?></div>
        </a>
      </div>
    <?php } else { ?>
      <tr>
        <td>
          <div class="image-plugins">
            <div class="icon">
              <i class="medical-icon-i-outpatient"></i>
            </div>
          </div>
          <div class="sname"><?php echo $module_title; ?></div>
        </td>
        <td>
          <?php echo $module_description; ?>
        </td>
        <td>
          <a href="<?php echo $module_url; ?>" alt="<?php echo $module_author; ?>"><?php echo $module_author; ?></a>
        </td>
        <td>
          <form method="post">
            <input type="hidden" name="dirmodule" value="<?php echo $module_directory; ?>">
            <button type="submit" class="btn btn-danger" id="delete-plugins"><i class="material-icons">delete</i> Delete</button>
          </form>
        </td>
      </tr>
    <?php } ?>
<?php } ?>
