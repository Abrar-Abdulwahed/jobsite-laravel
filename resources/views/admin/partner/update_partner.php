
<!-- Content wrapper -->
<div class="content-wrapper">
  <!-- Content -->
  <div class="container-xxl flex-grow-1 container-p-y">     
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">دور النشر/</span>تعديل دور نشر</h4>
    <!-- Multi Column with Form Separator -->
    <div class="card mb-4">
      <h5 class="card-header">تعديل دار نشر</h5>
      <form class="card-body" action="/update_publisher" method="POST" enctype="multipart/form-data"> 
        <input type="hidden" name="id" value="">
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label" for="multicol-publisher-name">اسم دار النشر</label>
            <input name="publisher_name" type="text" id="multicol-publisher-name" value="" class="form-control"/>
          </div>
          <div class="col-md-3">
            <label class="form-label" for="multicol-publisher-email">البريد الإلكتروني للناشر</label>
            <input name="publisher_email" type="email" id="multicol-publisher-email" value="" class="form-control" />
          </div>
          <div class="col-md-3">
            <label class="form-label" for="multicol-pic">صورة دار النشر</label>
            <div class="input-group input-group-merge">
              <input name="image" type="file"  class="form-control" value=""  aria-describedby="multicol-pic" />    
            </div>
          </div>
          <div class="col-md-3">
            <label class="form-label" for="multicol-publisher-phone">الرقم الأول للتواصل مع دار النشر</label>
            <input name="publisher_phone" type="text" id="multicol-publisher-phone" value="" class="form-control"  placeholder="(+967)-736565237" />
          </div>
          <div class="col-md-3">
            <label class="form-label" for="multicol-publisher-alt-phone">الرقم الثاني للتواصل مع دار النشر</label>
            <input name="publisher_alt_phone" type="text" id="multicol-publisher-alt-phone" value="" class="form-control"  placeholder="(+967)-777777777" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="multicol-publisher-fax">الفاكس</label>
            <input name="publisher_fax" type="text" id="multicol-publisher-fax" value="" class="form-control" placeholder="ex. 555-123-4567" />
          </div>
          <div class="col-md-6">
            <label class="form-label" for="multicol-publisher-address">العنوان</label>
            <textarea class="form-control" name="publisher_address" id="multicol-publisher-address" cols="2" rows="4"></textarea>
          </div>
          <div class="col-md-3">
            <label class="form-label" for="multicol-publisher-country">البلد</label>
            <input name="publisher_country" type="text" id="multicol-publisher-country" value="" class="form-control" placeholder="اليمن" />
          </div>
          <div class="col-md-6">
            <div class="form-password-toggle">
              <label class="form-label" for="multicol-confirm-password">تفعيل دار النشر</label>
              <div class="input-group input-group-merge">
                <label class="switch">  
                  <input name="is_active" value="0" type="checkbox" checked class="switch-input" />
                  <span class="switch-toggle-slider">
                    <span class="switch-on"></span>
                    <span class="switch-off"></span>
                  </span>
                  <span class="switch-label">active</span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="pt-4">
          <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
          <button type="reset" class="btn btn-label-secondary">Cancel</button>
        </div>
      </form>
    </div> 
  </div>
  <!-- / Content -->
  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
