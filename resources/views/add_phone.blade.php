<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Phone</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    body{
      background: radial-gradient(circle at 10% 10%, #e0f2fe 0%, transparent 35%),
                  radial-gradient(circle at 90% 20%, #ede9fe 0%, transparent 35%),
                  radial-gradient(circle at 50% 90%, #dcfce7 0%, transparent 45%),
                  #f8fafc;
      min-height: 100vh;
    }
    .card-glass{
      background: rgba(255,255,255,0.75);
      backdrop-filter: blur(10px);
      border: 1px solid rgba(0,0,0,0.06);
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      border-radius: 18px;
    }
    .form-control, .form-select{
      border-radius: 12px;
    }
    .btn{
      border-radius: 12px;
    }
    .image-preview{
      width: 100%;
      max-height: 260px;
      object-fit: cover;
      border-radius: 14px;
      border: 1px dashed rgba(0,0,0,.2);
      background: #fff;
    }
    .helper{
      font-size: .875rem;
      color: #64748b;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-9 col-xl-8">
        <div class="card card-glass">
          <div class="card-body p-4 p-md-5">
            <div class="d-flex align-items-center justify-content-between flex-wrap gap-3 mb-4">
              <div>
                <h3 class="mb-1 fw-bold"><i class="bi bi-phone me-2"></i>Add New Phone</h3>
                <div class="helper">Fill in phone details and upload an image.</div>
              </div>
             
            </div>

            <!-- FORM -->
            <form action="{{route('phone.insert')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="row g-3">
                <!-- Model -->
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Model</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-tag"></i></span>
                    <input type="text" name="model" class="form-control" placeholder="e.g. iPhone 15 Pro" maxlength="50" required>
                  </div>
                </div>

                <!-- Brand -->
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Brand</label>
                  <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-building"></i></span>
                    <input type="text" name="brand" class="form-control" placeholder="e.g. Apple, Samsung" maxlength="50" required>
                  </div>
                </div>

                <!-- Price -->
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Price</label>
                  <div class="input-group">
                    <span class="input-group-text">$</span>
                    <input type="number" name="price" class="form-control" placeholder="0.00" step="0.01" min="0" required>
                  </div>
                  <div class="helper mt-1">Stored as decimal(10,2).</div>
                </div>

                <!-- Image upload -->
                <div class="col-md-6">
                  <label class="form-label fw-semibold">Phone Image</label>
                  <input type="file" name="image" id="imageInput" class="form-control" accept="image/*" required>
                  <div class="helper mt-1">PNG/JPG recommended.</div>
                </div>

                <!-- Description -->
                <div class="col-12">
                  <label class="form-label fw-semibold">Description</label>
                  <textarea name="description" class="form-control" rows="4" placeholder="Write phone features, storage, color, condition..." required></textarea>
                </div>

            
                <!-- Buttons -->
                <div class="col-12 d-flex flex-wrap gap-2 mt-2">
                  <button type="submit" class="btn btn-primary px-4">
                    <i class="bi bi-save2 me-2"></i>Save Phone
                  </button>
                  <button type="reset" class="btn btn-outline-secondary px-4" id="resetBtn">
                    <i class="bi bi-arrow-counterclockwise me-2"></i>Reset
                  </button>
                  <a href="#" class="btn btn-light px-4 ms-auto">
                    <i class="bi bi-arrow-left me-2"></i>Back
                  </a>
                </div>

              </div>
            </form>
            <!-- /FORM -->

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>