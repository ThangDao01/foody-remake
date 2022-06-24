<template>
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-12">
        <div class="p-5">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Editor Restaurant</h1>
          </div>
          <form onsubmit="return false">
            <div class="form-group row">
              <div class="col-sm-6">
                <input type="text" class="form-control-user form-control" v-model="createResult.restaurant_name" placeholder="Name" required >
              </div>
              <div class="col-sm-2">
                <input type="radio" id="opt1" name="is_branch" value="1" v-model="createResult.is_branch" checked>
                <label for="opt1">Sub branch</label>
                <input type="radio" id="opt2" name="is_branch" value="0" v-model="createResult.is_branch">
                <label for="opt2" v-on:click="optBranchChange()">Main branch</label>
              </div>
              <div class="col-sm-4">
                <select class="form-control form-control-user" v-on:change="setProvincesResult()"
                        v-model="createResult.main_branch_id">
                  <option value="">-Main Branch-</option>
                  <option :value="branch.id" v-if="createResult.is_branch==1" v-for="branch in main_branch">
                    {{ branch.restaurant_name }}
                  </option>
                </select>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-3">
                <select class="form-control form-control-user" v-on:change="setProvincesResult()"
                        v-model="createResult.location_province">
                  <option value="">-Province-</option>
                  <option :value="province.matp" v-for="province in location.provinces">{{ province.name }}</option>
                </select>
              </div>
              <div class="col-sm-3">
                <select class="form-control form-control-user" v-model="createResult.location_district">
                  <option value="">-District-</option>
                  <option value="" disabled v-if="createResult.location_province==''">Chose province first</option>
                  <option :value="district.maqh" v-else v-for="district in districts_selected">{{
                      district.name
                    }}
                  </option>
                </select>
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" v-model="createResult.location_address" placeholder="Address" >
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-3">
                <input type="text" class="form-control form-control-user" v-model="createResult.restaurant_title" placeholder="Title">
              </div>
              <div class="col-sm-3">
                <input type="text" class="form-control form-control-user" v-model="createResult.restaurant_phone" placeholder="Phone">
              </div>
              <div class="col-sm-3">
                <input type="text" class="form-control form-control-user" v-model="createResult.price_min" placeholder="Min Price (VND)">
              </div>
              <div class="col-sm-3">
                <input type="text" class="form-control form-control-user" v-model="createResult.price_max" placeholder="Max Price (VND)">
              </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-3 example_objects_as_tags_test tag-input">
                Category :
                <input type="text" name="category" data-role="tagsinput">
              </div>
              <div class="col-sm-3">
                Thumbnail:
                <input type="file" class="form-control-user p-3" aria-label="upload image button"
                       v-on:change="selectFile">
              </div>
              <div class="col-sm-3">
                Thumbnail Result:
                <img :src="createResult.restaurant_thumbnail"
                     alt="url erro" width="200px" height="200px">
              </div>

            </div>

            <button type="button" class="btn btn-primary btn-user btn-block" v-on:click="saveRestaurant()" >
              Save
            </button>
          </form>
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
      status: '',
      cate_result: '',
      option_cate: [],
      new_cate: [],
      createResult: {
        restaurant_name: '',
        restaurant_title: '',
        restaurant_thumbnail: 'https://images.foody.vn/dcat/s180x180/foody-food%403x-636888657207501838.png',
        restaurant_phone: '',
        restaurant_coordinate: '',
        location_province: '',
        location_district: '',
        location_address: '',
        categories: '',
        open_time: '',
        price_min: '',
        price_max: '',
        is_branch: 1,
        main_branch_id: '',
      },
      location: {
        provinces: [
          {
            name: '',
            matp: '',
          }
        ],
        districts: [
          {
            name: '',
            maqh: '',
            matp: '',
          },
        ]
      },
      districts_selected: [
        {
          name: '',
          maqh: '',
          matp: '',
        },
      ],
      main_branch: [
        {
          id: '',
          restaurant_name: '',
        },
      ],
    }
  },
  head() {
    return {
      link: [
        {
          rel: 'stylesheet',
          href: '/css/bootstrap-tagsinput.css'
        },
        {
          rel: 'stylesheet',
          href: '/css/main-admin.css'
        },
        {
          rel: 'stylesheet',
          href: '/assets/app.css'
        },
      ],
      script: [
        {
          hid: 'stripe',
          src: 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: 'https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: '/js/bootstrap-tagsinput.min.js',
          defer: true
        },
        {
          hid: 'stripe',
          src: '/js/app.js',
          defer: true
        },
      ]
    }
  },
  mounted() {
    this.initDataForm();
    this.setCategoryOption();
    this.getLocation();
    this.getMainBranch();
  },
  methods: {
    async initDataForm() {
     var uri = '/restaurant/id='+this.$route.params.id
      this.this.createResult = await this.$axios.$get(uri);
    },
    async setCategoryOption() {
      this.option_cate = await this.$axios.$get('category-name-all');
      console.log(this.option_cate);
      var list_category_option = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('category_name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: $.map(this.option_cate, function (name) {
          return {category_name: name};
        })});
      list_category_option.initialize();

      $('input[name="category"]').tagsinput({
        typeaheadjs: {
          name: 'list_category_option',
          displayKey: 'category_name',
          valueKey: 'category_name',
          source: list_category_option.ttAdapter()
        }
      });
    },
    async getLocation() {
      this.location = await this.$axios.$get('location-all')
    },
    async getMainBranch() {
      this.main_branch = await this.$axios.$get('restaurant-main')
    },
    setProvincesResult() {
      var cr_provinces = this.createResult.location_province
      var length = 0;
      this.createResult.location_district = '';
      for (let i = 0; i < this.location.districts.length; i++) {
        if (this.location.districts[i].matp === cr_provinces) {
          this.districts_selected[length++] = this.location.districts[i];
        }
      }
    },
    optBranchChange() {
      this.createResult.main_branch_id = '';
    },
    async selectFile(e) {
      const file = e.target.files[0];

      /* Make sure file exists */
      if (!file) {
        return;
      }

      /* create a reader */
      const readData = (f) => new Promise((resolve) => {
        const reader = new FileReader();
        reader.onloadend = () => resolve(reader.result);
        reader.readAsDataURL(f);
      });

      /* Read data */
      const data = await readData(file);
      /* upload the converted data */
      const instance = await this.$cloudinary.upload(data.toString(), {
        uploadPreset: 'ekcloudinary',
      })
      this.createResult.restaurant_thumbnail = instance.secure_url
    },
    async checkNewCate() {
      this.new_cate = [];
      for (let i = 0; i < this.createResult.categories.length; i++) {
        if (!this.option_cate.includes(this.createResult.categories[i])) {
          this.new_cate.push(this.createResult.categories[i])
        }
      }
      if (this.new_cate!=null){
        this.status = await this.$axios.$post('sub-category-create', {
          new_cate:this.new_cate
        });
      }
      console.log(this.new_cate)
    },
    async saveRestaurant() {
      console.log(3)

      this.createResult.categories = $('input[name="category"]').tagsinput('items');
      this.checkNewCate()
      console.log(this.createResult)

      var response = await this.$axios.$post('restaurant-create', this.createResult);
      if (response==1){
        alert("Create restaurant finish!")
        await this.$router.push('/admin/restaurant');
      }
    }
  }
}
</script>

<style scoped>

</style>
