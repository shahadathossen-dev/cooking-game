<template>
  <validation-provider
    v-slot="{ errors, valid, dirty }"
    :name="$attrs.label"
    :rules="rules"
    :vid="vid"
    tag="div"
  >
    <input v-model="innerValue"
      type="text"
      :success="valid && dirty"
      v-bind="$attrs"
      v-on="$listeners"
    >
    <span>{{ errors[0] }}</span>
    <!-- <v-text-field
      v-model="innerValue"
      :error-messages="errors"
      :success="valid && dirty"
      v-bind="$attrs"
      v-on="$listeners"
    /> -->
  </validation-provider>
</template>

<script>
export default {
  name: 'textInput',
  props: {
    vid: {
      type: String,
      default: 'name',
    },
    rules: {
      type: [Object, String],
      default: '',
    },
    // must be included in props
    value: {
      type: null,
      default: null,
    },
  },
  data: () => ({
    innerValue: '',
  }),
  watch: {
    // Handles internal model changes.
    innerValue(newVal) {
      this.$emit('input', newVal);
    },
    // Handles external model changes.
    value(newVal) {
      this.innerValue = newVal;
    },
  },
  created() {
    if (this.value) {
      this.innerValue = this.value;
    }
  },
};
</script>
