import ErrorForbidden from '@/views/errors/Forbidden.vue';
import ErrorNotFound from '@/views/errors/NotFound.vue';

// Welcome
import Home from '@/views/home/Index.vue';

// Illustrations
import IllustrationIndex from '@/views/illustration/Index.vue';
import IllustrationCreate from '@/views/illustration/Create.vue';
import IllustrationEdit from '@/views/illustration/Edit.vue';

// Shop - Products
import ProductIndex from '@/views/product/Index.vue';
import ProductCreate from '@/views/product/Create.vue';
import ProductEdit from '@/views/product/Edit.vue';

// News
import NewsIndex from '@/views/news/Index.vue';
import NewsCreate from '@/views/news/Create.vue';
import NewsEdit from '@/views/news/Edit.vue';

// Posts
import PostIndex from '@/views/post/Index.vue';
// import PostCreate from '@/views/post/Create.vue';
// import PostEdit from '@/views/post/Edit.vue';

const routes = [

  // Home
  {
    name: 'home',
    path: '/administration',
    component: Home,
  },
  
  // Illustrations
  {
    name: 'illustrations',
    path: '/administration/illustrations',
    component: IllustrationIndex,
  },
  {
    name: 'illustration-create',
    path: '/administration/illustration/create',
    component: IllustrationCreate,
  },
  {
    name: 'illustration-edit',
    path: '/administration/illustration/edit/:id',
    component: IllustrationEdit,
  },

  // Shop - Products
  {
    name: 'products',
    path: '/administration/products',
    component: ProductIndex,
  },
  {
    name: 'product-create',
    path: '/administration/product/create',
    component: ProductCreate,
  },
  {
    name: 'product-edit',
    path: '/administration/product/edit/:id',
    component: ProductEdit,
  },

  // News
  {
    name: 'news',
    path: '/administration/news',
    component: NewsIndex,
  },
  {
    name: 'news-create',
    path: '/administration/news/create',
    component: NewsCreate,
  },
  {
    name: 'news-edit',
    path: '/administration/news/edit/:id',
    component: NewsEdit,
  },

  // Posts
  {
    name: 'posts',
    path: '/administration/posts',
    component: PostIndex,
  },
  // {
  //   name: 'post-create',
  //   path: '/administration/post/create',
  //   component: PostCreate,
  // },
  // {
  //   name: 'post-edit',
  //   path: '/administration/post/edit/:id',
  //   component: PostEdit,
  // },

  // Authorization
  {
    name: 'forbidden',
    path: '/forbidden',
    component: ErrorForbidden,
  },
  {
    name: 'not-found',
    path: '/not-found',
    component: ErrorNotFound,
  }
];

export default routes