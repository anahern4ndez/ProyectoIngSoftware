import { AbilityBuilder } from '@casl/ability';
import { store } from '../renderer/main';

//var user = store.user

export default AbilityBuilder.define(can => {
    can('read', 'all')
    can('create', 'Post')
})