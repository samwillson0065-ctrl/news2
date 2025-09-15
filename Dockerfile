# Use the official Nginx image as a base
FROM nginx:alpine

# Copy your HTML file to the default Nginx public directory
COPY index.html /usr/share/nginx/html/index.html

# Expose port 80 (the default HTTP port)
EXPOSE 80

# Start Nginx server
CMD ["nginx", "-g", "daemon off;"]
