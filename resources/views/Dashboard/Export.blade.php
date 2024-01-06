    
@extends('layout.base')

@section('content')
    
    <div class="container">
      <h2>Export Import Tampilan</h2>

      <!-- Tombol untuk Membuka Modal Export -->
      <button
        type="button"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#exportModal"
      >
        Export Data
      </button>

      <!-- Tombol untuk Membuka Modal Import -->
      <button
        type="button"
        class="btn btn-success"
        data-toggle="modal"
        data-target="#importModal"
      >
        Import Data
      </button>

      <!-- Modal Export -->
      <div class="modal" id="exportModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Export Data</h5>
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Form untuk Export Data -->
              <form>
                <!-- Isi form export sesuai kebutuhan -->
                <div class="form-group">
                  <label for="exportOptions">Export Options:</label>
                  <select
                    class="form-control"
                    id="exportOptions"
                    name="exportOptions"
                  >
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
              <button
                type="button"
                class="close"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- Form untuk Import Data -->
              <form>
                <!-- Isi form import sesuai kebutuhan -->
                <div class="form-group">
                  <label for="importFile">Select File:</label>
                  <input
                    type="file"
                    class="form-control-file"
                    id="importFile"
                    name="importFile"
                  />
                </div>
                <button type="button" class="btn btn-success">Import</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    @endsection