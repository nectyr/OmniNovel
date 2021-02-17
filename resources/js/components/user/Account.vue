<template>
    <li class="nav-item dropdown">
        <a href="#account_menu" class="nav-link dropdown-toggle" data-toggle="dropdown" data-caret="false">
              <span class="mr-1 d-flex-inline">
                <span class="text-light">{{ UserData.name }}</span>
              </span>
            <img src="/vendor/flowdash/images/avatar/demi.png" class="rounded-circle" width="32" alt="Frontted" />
        </a>
        <div id="account_menu" class="dropdown-menu dropdown-menu-right">
            <div class="dropdown-item-text dropdown-item-text--lh">
                <div><strong>{{ UserData.name }}</strong></div>
                <div class="text-muted">@adriandemian</div>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item " href="">
                <i class="material-icons">dvr</i>
                Dashboard
            </a>
            <a class="dropdown-item " href="">
                <i class="material-icons">account_circle</i>
                My profile
            </a>
            <a class="dropdown-item " href="">
                <i class="material-icons">edit</i>
                Edit account
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="material-icons">exit_to_app</i>
                Logout
            </a>
        </div>
    </li>
</template>

<script>
import axios from "axios";

export default {
    name: "Account",
    data() {
        return {
            UserData: []
        };
    },
    mounted() {
        axios.get("/user/show")
            .then(response => {
                this.UserData = response.data
            })
            .catch(err => {
                this.UserData.name = '???';
            })
    }
};
</script>

