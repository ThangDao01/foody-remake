<template>
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
      For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official
        DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
              <div class="col-sm-12 col-md-6">
                <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length"
                                                                                         aria-controls="dataTable"
                                                                                         class="custom-select custom-select-sm form-control form-control-sm">
                  <option value="10">10</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                </select> entries</label></div>
              </div>
              <div class="col-sm-12 col-md-6">
                <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                                                                          class="form-control form-control-sm"
                                                                                          placeholder=""
                                                                                          aria-controls="dataTable"></label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid"
                       aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
                  <tr role="row">
                    <th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Name</th>
                    <th rowspan="1" colspan="1">Thumbnail</th>
                    <th rowspan="1" colspan="1">Phone</th>
                    <th rowspan="1" colspan="1" style="width: 100px;">Category</th>
                    <th rowspan="1" colspan="1">Total Gallery</th>
                    <th rowspan="1" colspan="1">Total Reviews</th>
                    <th rowspan="1" colspan="1">Total Save</th>
                    <th rowspan="1" colspan="1">Action</th>
                  </tr>
                  </thead>
                  <tfoot>
                  <tr>
                    <th rowspan="1" colspan="1">ID</th>
                    <th rowspan="1" colspan="1">Name</th>
                    <th rowspan="1" colspan="1">Thumbnail</th>
                    <th rowspan="1" colspan="1">Phone</th>
                    <th rowspan="1" colspan="1">Category</th>
                    <th rowspan="1" colspan="1">Total Gallery</th>
                    <th rowspan="1" colspan="1">Total Reviews</th>
                    <th rowspan="1" colspan="1">Total Save</th>
                    <th rowspan="1" colspan="1">Action</th>
                  </tr>
                  </tfoot>
                  <tbody>
                  <tr class="even" v-for="(restaurant,index) in list_restaurant">
                    <td>{{ index + 1 }}</td>
                    <td>{{ restaurant.restaurant_name }}</td>
                    <td><img :src="restaurant.restaurant_thumbnail" alt="" width="100px"></td>
                    <td>{{ restaurant.restaurant_phone }}</td>
                    <td>
                      <span class="badge" :class="category.type ==1 ? 'badge-primary':'badge-success'"
                            v-for="category in restaurant.categories">{{ category.category_name }}</span>
                    </td>
                    <td>{{ restaurant.total_gallery }}</td>
                    <td>{{ restaurant.total_reviews }}</td>
                    <td>{{ restaurant.total_save }}</td>
                    <td>
                      <nuxt-link :to="'/admin/restaurant/detail/'+restaurant.id">
                        <span class="badge badge-primary">Detail</span>
                      </nuxt-link>
                      <br>
                      <nuxt-link :to="'/admin/restaurant/edit/'+restaurant.id">
                        <span class="badge badge-warning">Edit</span>
                      </nuxt-link>
                      <br>
                      <summary class="badge badge-danger" v-on:click="deleteRestaurant(restaurant.id)">Delete</summary>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-5">
                <div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57
                  entries
                </div>
              </div>
              <div class="col-sm-12 col-md-7">
                <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                  <ul class="pagination">
                    <li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#"
                                                                                                       aria-controls="dataTable"
                                                                                                       data-dt-idx="0"
                                                                                                       tabindex="0"
                                                                                                       class="page-link">Previous</a>
                    </li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1"
                                                                    tabindex="0" class="page-link">1</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2"
                                                              tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3"
                                                              tabindex="0" class="page-link">3</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4"
                                                              tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5"
                                                              tabindex="0" class="page-link">5</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6"
                                                              tabindex="0" class="page-link">6</a></li>
                    <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable"
                                                                                      data-dt-idx="7" tabindex="0"
                                                                                      class="page-link">Next</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'index',
  layout: 'admin-layout',
  data() {
    return {
      list_restaurant: [
        {
          restaurant_name: '',
          restaurant_thumbnail: '',
          restaurant_phone: '',
          total_gallery: '',
          total_reviews: '',
          total_save: '',
          categories: '',
        }
      ],
    }
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    async fetchData() {
      this.list_restaurant = await this.$axios.$get('restaurant-all')
    },
    async deleteRestaurant(id) {
      if (confirm("Are you sure delete this restaurant ") === true) {
        var url= '/restaurant-delete/id='+id;
        if (await this.$axios.$get(url)==1){
          alert("Delete finish")
          this.list_restaurant = await this.$axios.$get('restaurant-all')
        }else{
          alert("Delete fails")
        }

      }
    },
  }
}
</script>
