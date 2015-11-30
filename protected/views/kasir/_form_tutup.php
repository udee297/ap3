<?php
/* @var $this KasirController */
/* @var $model Kasir */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="small-12 columns">
        <?php
        $this->widget('BDetailView', array(
            'data' => $model,
            'attributes' => array(
                array(
                    'name' => 'user.nama',
                    'label' => 'Login'
                ),
                array(
                    'name' => 'user.nama_lengkap',
                    'label' => 'Nama'
                ),
                /*
                  array(
                  'name' => 'device.nama',
                  'label' => 'Device'
                  ),
                 */
                array(
                    'name' => 'device.keterangan',
                    'label' => 'POS Client (Workstation)'
                ),
                'waktu_buka',
                'saldo_awal',
                //'saldo_akhir',
                'total_penjualan',
                'total_margin',
                'total_retur',
                'saldo_akhir_seharusnya',
            ),
        ));
        ?>
    </div>
</div>
<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'kasir-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <?php echo $form->errorSummary($model, 'Error: Perbaiki input', null, array('class' => 'panel callout')); ?>

    <div class="row">
        <div class="small-12 columns">
            <?php echo $form->labelEx($model, 'saldo_akhir'); ?>
            <?php echo $form->textField($model, 'saldo_akhir', array('size' => 18, 'maxlength' => 18, 'autofocus' => 'autofocus')); ?>
            <?php echo $form->error($model, 'saldo_akhir', array('class' => 'error')); ?>
        </div>
    </div>

    <div class="row">
        <div class="small-12 columns">
            <?php echo CHtml::submitButton('Tutup Kasir', array('class' => 'tiny bigfont button')); ?>
        </div>
    </div>

    <?php $this->endWidget(); ?>

</div>