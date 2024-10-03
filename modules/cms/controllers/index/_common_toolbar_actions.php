<?= $this->makePartial('button_commit'); ?>

<?= $this->makePartial('button_reset'); ?>

<button
    type="button"
    class="
        btn btn-danger empty wn-icon-trash-o
        <?php if (!$templatePath): ?>
            hide
        <?php endif ?>
    "
    data-request="onDelete"
    data-request-confirm="<?= e(trans('cms::lang.' . $toolbarSource . '.delete_confirm_single')) ?>"
    data-request-success="$.wn.cmsPage.updateTemplateList('<?= $toolbarSource ?>'); $(this).trigger('close.oc.tab', [{force: true}])"
    data-control="delete-button">
</button>

<?= $this->makePartial('button_lastmodified'); ?>
