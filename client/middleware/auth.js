export default ({ store, redirect }) => {
  console.log(store);
  if (!store.getters['auth/check']) {
    return redirect('/login')
  }
}
