echo "verif..."
minikube stop
minikube delete --all

echo "Minikube start..."
minikube start --driver=virtualbox --memory='3000' --disk-size 5000MB

echo "addons..."
minikube addons enable metallb
minikube addons enable dashboard

echo "new cluster..."
minikube kubectl -- get po -A

echo "Minikube dashboard..."
minikube dashboard &


kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.4/manifests/namespace.yaml
kubectl apply -f https://raw.githubusercontent.com/metallb/metallb/v0.9.4/manifests/metallb.yaml
# On first install only
kubectl create secret generic -n metallb-system memberlist --from-literal=secretkey="$(openssl rand -base64 128)"

kubectl apply -f srcs/metallb.yaml

echo "Nginx..."
docker build -t mynginx	./srcs/nginx/
