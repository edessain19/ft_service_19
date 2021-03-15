echo "verif..."
minikube stop
minikube delete --all

echo "Minikube start..."
minikube start --driver=virtualbox --memory='3000' --disk-size 5000MB

echo "addons..."
minikube addons enable metrics-server
minikube addons enable metallb
minikube addons enable dashboard

echo "new cluster..."
minikube kubectl -- get po -A

echo "Minikube dashboard..."
minikube dashboard &

eval $(minikube docker-env)

#kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.4/manifests/namespace.yaml
#kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.4/manifests/metallb.yaml
# On first install only
# kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"

kubectl apply -f services/metallb.yaml

echo "Nginx..."
docker build -t mynginx ./services/nginx/
kubectl apply -f services/nginx/srcs/nginx.yaml

echo "Wordpress..."
docker build -t wordpress ./services/wordpress/
kubectl apply -f services/wordpress/wordpress.yaml

echo "Phpmyadmin"
docker build -t phpmyadmin ./services/phpmyadmin/
kubectl apply -f services/phpmyadmin/phpmyadmin.yaml

echo "Ftps"
docker build -t ftps ./services/ftps/
kubectl apply -f services/ftps/ftps.yaml
# echo "Mysql"
# docker build -t mysql ./services/mysql/
# kubectl apply -f services/mysql/mysql.yaml


