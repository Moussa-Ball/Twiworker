<template>
  <div class="container mx-auto px-4 lg:px-6 flex flex-wrap items-center justify-between">
    <div class="flex flex-wrap w-full my-12">
      <!-- COL-3 -->
      <div class="w-full lg:w-3/12">
        <div class="flex justify-between items-center">
          <!-- Page title -->
          <h4 class="font-gotham-rounded text-gray-800 font-medium text-base">
            Find Talents
          </h4>
          <a
            href="javascript:void;"
            class="font-gotham-rounded font-medium text-xs text-primary hover:underline"
          >CLEAR ALL</a>
        </div>

        <div class="block">
          <!-- Location -->
          <expander-filter name="Location" />
          
          <!-- Categories -->
          <expander-filter
            name="Categories"
          >
            <multiselect 
              v-model="categories.value" 
              :options="categories.options" 
              :searchable="true" 
              :close-on-select="true" 
              :show-labels="false"
              placeholder="Select categories"
            />
          </expander-filter>
          
          <!-- Speciality -->
          <expander-filter
            name="Speciality"
          >
            <multiselect 
              v-model="specialities.value" 
              :options="specialities.options" 
              :searchable="true" 
              :close-on-select="true" 
              :show-labels="false"
              placeholder="Select specialities"
            />
          </expander-filter>

          
          <expander-filter name="Languages" />
          <expander-filter name="Hourly Rate" />

          <!-- Skills -->
          <expander-filter
            name="Skills"
          >
            <vue-tags-input
              v-model="skills.value"
              :add-on-blur="false"
              :add-from-paste="false"
              :tags="skills.existing"
              placeholder="Add Skills"
              @tags-changed="newTags => tags = newTags"
            />
          </expander-filter>

          <expander-filter name="Success" />
          <expander-filter name="Hours Worked" />
          <expander-filter name="Dollars earned" />
          <expander-filter name="Talent Type" />
          <expander-filter name="Level of experience" />
          <expander-filter name="Workplace" />
        </div>
      </div>

      <!-- COL-9 -->
      <div class="w-full lg:w-9/12 px-0 lg:pl-4">
        <div class="bg-white shadow-dropdown">
          <div class="flex justify-between items-center py-6 px-6">
            <card-result :number="25" />
            <card-input-search placeholder="eg: First Name, Last Name, Skills, Country or keyword…" />
          </div>
          <ul>
            <li
              v-for="i in 5"
              :key="i"
            >
              <freelancerCard />
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      categories: {
        value: "",
        options: [
          'Web Design', 
          'Desktop Software', 
          'Video Creating',
        ]
      },
      specialities: {
        value: "",
        options: [
          'Database Develoment', 
          'Front-End Development', 
          'Back-End Development',
        ]
      },
      skills: {
        value: '',
        existing: []
      }
    }
  }
}
</script> 
