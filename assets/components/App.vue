<template>
    <div>
        <table class="table table-hover">
            <thead>
            <tr><th>Имя</th><th>Отчество</th><th>Фамилия</th><th>Телефон</th></tr>
            </thead>
            <tbody>
            <tr v-for="user in users">
                <td v-for="key in columns">
                    {{ user[key] }}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
  export default {
    props: ['users', 'usersTitle'],
    data() {
      return {
        columns: ['firstName', 'middleName', 'lastName', 'phone']
      };
    },
    created() {
      console.log(this.users)
      console.log(this.usersTitle)
    }
  };
</script>
