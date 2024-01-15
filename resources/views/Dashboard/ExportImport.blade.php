<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Export Import Tampilan</title>
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Export Import Tampilan</h2>

    <!-- Button Modal Export -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exportModal">
        Export Data
    </button>

    <!-- Button Modal Import -->
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#importModal">
        Import Data
    </button>

    <!-- Modal Export -->
    <div class="modal" id="exportModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Export Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk Export Data -->
                    <form>
                        <!-- Isi form export  -->
                        <div class="form-group">
                            <label for="exportOptions">Export Options:</label>
                            <select class="form-control" id="exportOptions" name="exportOptions">
                                <option value="csv">CSV</option>
                                <option value="excel">Excel</option>
                            </select>
                        </div>
                        <button type="button" class="btn btn-primary">Export</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Import -->
    <div class="modal" id="importModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Import Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk Import Data -->
                    <form>
                        <!-- Isi form import sesuai kebutuhan -->
                        <div class="form-group">
                            <label for="importFile">Select File:</label>
                            <input type="file" class="form-control-file" id="importFile" name="importFile">
                        </div>
                        <button type="button" class="btn btn-success">Import</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
