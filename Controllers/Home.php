<?PHP 
    class Home  extends Controllers{
        public function __construct(){
            parent::__construct();
        }

        public function home($params){
            $data['tag_page'] = "Home";
            $data['page_title'] = "Página principal";
            $data['page_name'] = "home";
            $this->views->getView($this, "home", $data);
        }

        public function insert(){
            $data = $this->model->setUser();
            print_r($data);
        }

        public function getUser($id) {
            $data = $this->model->getUser($id);
            print_r($data);
        }

        public function getAllUsers(){
            $data = $this->model->getAllUsers();
            print_r($data);
        }

        public function update(){
            $data = $this->model->updateUser(1,"cadena",20);
            print_r($data);
        }

        public function delete($id){
            $data = $this->model->deleteUser($id);
            print_r($data);
        }

    }
?>