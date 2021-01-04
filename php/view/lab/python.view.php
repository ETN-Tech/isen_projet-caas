<div class="row mb-4">
    <div class="col">
        <h2>Python Sandbox</h2>
    </div>
    <div class="col text-right">
        <a href="/lab" class="btn btn-outline-secondary">Go back to lab</a>
    </div>
</div>

<form action="" method="post">
    <?php if (!empty($lab['script_instruction'])) { ?>
    <div class="form-group">
        <h5><label for="input" class="d-block"><?= $lab['script_instruction'] ?></label></h5>
        <input type="text" class="form-control" id="input" name="input">
    </div>
    <?php } ?>
    <input class="btn btn-primary" type="submit" name="form-python" value="Execute">
</form>

<div class="alert alert-secondary mt-4">
    <b>Output :</b>
    <pre><?= $output ?></pre>
</div>
