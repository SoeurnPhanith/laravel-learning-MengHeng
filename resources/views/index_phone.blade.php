<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Phone List</title>

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
    .glass-card{
      background: rgba(255,255,255,.78);
      border: 1px solid rgba(0,0,0,.06);
      box-shadow: 0 12px 34px rgba(0,0,0,.08);
      border-radius: 18px;
      backdrop-filter: blur(10px);
    }
    .table thead th{
      background: #0f172a;
      color: #fff;
      border-color: rgba(255,255,255,.12);
      font-weight: 600;
      white-space: nowrap;
    }
    .table tbody td{
      vertical-align: middle;
    }
    .img-thumb{
      width: 75px;
      height: 75px;
      object-fit: cover;
      border-radius: 14px;
      border: 1px solid rgba(0,0,0,.08);
      background: #fff;
    }
    .badge-soft{
      background: rgba(59,130,246,.12);
      color: #1d4ed8;
      border: 1px solid rgba(59,130,246,.18);
      font-weight: 600;
    }
    .btn-round{
      border-radius: 12px;
    }
    .search-input{
      border-radius: 12px;
    }
  </style>
</head>

<body>
  <div class="container py-5">
    <div class="glass-card p-4 p-md-5">

      <!-- Header -->
      <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-4">
        <div>
          <h3 class="mb-1 fw-bold"><i class="bi bi-phone me-2"></i>Phone List</h3>
          <div class="text-secondary small">Manage your phone products and images.</div>
        </div>

        <div class="d-flex align-items-center gap-2">
          <span class="badge badge-soft px-3 py-2">
            Total: {{ isset($phones) ? $phones->count() : 0 }}
          </span>
          <a href="{{ route('phone.add') }}" class="btn btn-primary btn-round px-3">
            <i class="bi bi-plus-circle me-2"></i>Add Phone
          </a>
        </div>
      </div>

      <!-- Alert -->
      @if(session('success'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
          <i class="bi bi-check-circle-fill me-2"></i>
          <div>{{ session('success') }}</div>
        </div>
      @endif

      <!-- Toolbar -->
      <div class="row g-2 align-items-center mb-3">
        <div class="col-md-6">
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-search"></i></span>
            <input type="text" class="form-control search-input" placeholder="Search">
          </div>
        </div>
        <div class="col-md-6 text-md-end">
          <a href="#" class="btn btn-outline-secondary btn-round">
            <i class="bi bi-arrow-clockwise me-2"></i>Refresh
          </a>
        </div>
      </div>

      <!-- Table -->
      <div class="table-responsive">
        <table class="table table-hover align-middle mb-0">
          <thead>
            <tr>
              <th style="width:80px;">Id</th>
              <th>Model</th>
              <th>Brand</th>
              <th style="width:130px;">Price</th>
              <th style="width:120px;">Image</th>
              <th style="width:160px;">Action</th>
            </tr>
          </thead>

          <tbody>
            @forelse($phones as $phone)
              <tr>
                <td>
                  <span class="fw-semibold">{{ $phone->id }}</span>
                </td>

                <td>
                  <div class="fw-semibold">{{ $phone->model }}</div>
                  <div class="text-secondary small">Created: {{ optional($phone->created_at)->format('Y-m-d') }}</div>
                </td>

                <td>
                  <span class="badge text-bg-light border">{{ $phone->brand }}</span>
                </td>

                <td class="fw-semibold">
                  ${{ number_format((float)$phone->price, 2) }}
                </td>

                <td>
                  @if($phone->image)
                    <img class="img-thumb" src="{{ asset('storage/'.$phone->image) }}" alt="Phone image">
                  @else
                    <span class="text-secondary small">No Image</span>
                  @endif
                </td>

                <!-- ACTIONS (no routes, just #) -->
                <td>
                  <div class="d-flex gap-2">
                    <a href="#" class="btn btn-sm btn-outline-primary btn-round">
                      <i class="bi bi-pencil-square me-1"></i>Update
                    </a>

                    <a href="#" class="btn btn-sm btn-outline-danger btn-round"
                       onclick="return confirm('Delete this phone?')">
                      <i class="bi bi-trash me-1"></i>Delete
                    </a>
                  </div>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="6" class="text-center py-5">
                  <div class="text-secondary">
                    <i class="bi bi-inbox fs-3 d-block mb-2"></i>
                    No Data Found
                  </div>
                  <a href="{{ route('phone.add') }}" class="btn btn-primary btn-round mt-3">
                    <i class="bi bi-plus-circle me-2"></i>Add your first phone
                  </a>
                </td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>