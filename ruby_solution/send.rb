require 'sinatra'
require 'bunny'

get '/' do
  erb :index
end

post '/' do
    conn = Bunny.new(:automatically_recover => false)
    conn.start
    
    ch   = conn.create_channel
    q    = ch.queue("hello")
    
    params.each do |k,v|
        ch.default_exchange.publish(v, :routing_key => q.name)
        puts "[x] send #{v}"
    end
    conn.close
    
    redirect to("/")
end